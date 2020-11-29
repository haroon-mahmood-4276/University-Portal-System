<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UPMSAdmin;
use App\Models\UPMSPrograms;
use App\Models\UPMSSchools;
use App\Models\UPMSStudents;
use App\Models\UPMSTeachers;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function Login(Request $Req)
    {
        $Data = UPMSAdmin::select('ADMIN_ID AS ID', 'ADMIN_Password', 'ADMIN_FirstName AS FirstName', 'ADMIN_LastName AS LastName')->where(['ADMIN_ID' => strtolower($Req->txtUserID)])->first();
        $Data['DataType'] = 'Admin';
        if (!$Data  || !($Req->txtPassword == Crypt::decrypt($Data->ADMIN_Password))) {
            $Req->session()->put('Msg', [
                'MsgType' => 'danger',
                'MsgD' => 'User ID or Passowrd is incorrect.'
            ]);
            return redirect('/admin/login');
        } else {
            $Data['DataType'] = 'Admin';
            $Req->session()->put('Data', $Data);
            return redirect('/admin/dashboard');
        }
    }

    public function Dashboard()
    {
        $ProgramsCount = UPMSPrograms::count();
        $SchoolsCount = UPMSSchools::count();
        $StudentsCount = UPMSStudents::count();
        $TeachersCount = UPMSTeachers::count();


        $Schools = UPMSSchools::all();
        return view('Admin.AdminDashboard', ['Schools' => $Schools, 'ProgramsCount' => $ProgramsCount, 'SchoolsCount' => $SchoolsCount, 'StudentsCount' => $StudentsCount, 'TeachersCount' => $TeachersCount]);
    }


    //Student Related Functions
    public function StudentList()
    {
        $Students = UPMSStudents::select('STD_RollNo', 'STD_FirstName', 'STD_LastName');
        $Students = $Students->addSelect([
            'STDProgram' => UPMSPrograms::select('PRG_ProgramName')->whereColumn('PRG_PCode', '=', 'upms_students.STD_PRGPCode'),
            'STDSection' => UPMSPrograms::select('PRG_SectionName')->whereColumn('PRG_PCode', '=', 'upms_students.STD_PRGPCode')->whereColumn('PRG_SCode', '=', 'upms_students.STD_PRGSCode'),
            'SchoolName' => UPMSSchools::select('SCL_SchoolName')->whereColumn('SCL_SchoolCode', '=', 'upms_students.STD_SCLSchoolCode'),
            'SchoolAbb' => UPMSSchools::select('SCL_SchoolAbb')->whereColumn('SCL_SchoolCode', '=', 'upms_students.STD_SCLSchoolCode')
        ])->orderBy('STD_RollNo')->get();




        if ($Students->isEmpty()) {
            return view('Admin.AdminStdList', ['ErrMsg' => 'There is no Student in the Database']);
        } else {
            // return $Students;
            return view('Admin.AdminStdList', ['Students' => $Students, 'ErrMsg' => '']);
        }
    }

    public function AddSTD(Request $Req)
    {
        // return $Req->input();
        $Data = UPMSStudents::where(['STD_RollNo' => strtolower($Req->txtUserID)])->first();
        if ($Data) {
            $Req->session()->put('Msg', [
                'MsgType' => 'info',
                'MsgD' => 'This student is already exists.'
            ]);
            return redirect('/admin/student-list');
        } else {

            $Gender = '';
            if ($Req->txtCNIC[14] == '1' || $Req->txtCNIC[14] == '3' || $Req->txtCNIC[14] == '5' || $Req->txtCNIC[14] == '7' || $Req->txtCNIC[14] == '9') {
                $Gender = 'Male';
            } else {
                $Gender = 'Female';
            }

            $StudentData = new UPMSStudents;

            $StudentData->STD_RollNo = strtolower($Req->txtUserID);
            $StudentData->STD_Password = Crypt::encrypt($Req->txtUserPass);
            $StudentData->STD_FirstName = $Req->txtFirstName;
            $StudentData->STD_LastName = $Req->txtLastName;
            $StudentData->STD_CNIC = $Req->txtCNIC;
            $StudentData->STD_Address = $Req->txtAddress;
            $StudentData->STD_SCLSchoolCode = $Req->cbSchool;
            $StudentData->STD_PRGPCode = $Req->cbProgram;
            $StudentData->STD_PRGSCode = $Req->cbSection;
            $StudentData->STD_CrntSemester = $Req->cbCurrentSemester;
            $StudentData->STD_PhoneNo = $Req->txtPhoneNo;
            $StudentData->STD_Email = $Req->txtEmail;
            $StudentData->STD_Gender = $Gender;
            $StudentData->STD_CCCityCode =  $Req->cbCity;
            $StudentData->STD_CCCntryCode = $Req->cbCountry;
            $StudentData->STD_Picture = '';

            if ($StudentData->save()) {
                $Req->session()->put('Msg', [

                    'MsgType' => 'success',
                    'MsgD' => 'Data is successfully saved.'
                ]);
                return redirect('/admin/student-list');
            } else {
                $Req->session()->put('Msg', [

                    'MsgType' => 'danger',
                    'MsgD' => 'Data could saved'
                ]);
            }
        }
    }

    public function DeleteSTD($id)
    {
        // return UPMSStudents::where('STD_RollNo', '=', $id)->delete();
        try {
            if (UPMSStudents::where('STD_RollNo', '=', $id)->delete()) {
                session()->put('Msg', [

                    'MsgType' => 'success',
                    'MsgD' => 'Data is successfully deleted.'
                ]);
            } else {
                session()->put('Msg', [

                    'MsgType' => 'danger',
                    'MsgD' => 'Data could deleted because this Student doesn\'t exists.'
                ]);
            }
            return redirect('/admin/student-list');
        } catch (QueryException $ex) {
            dd($ex->getMessage());
        }
    }

    //Staff Related Functions
    public function StaffList()
    {
        $Teachers = UPMSTeachers::select('TCHR_ID', 'TCHR_FirstName', 'TCHR_LastName', 'TCHR_Post');
        $Teachers = $Teachers->addSelect([
            'SchoolName' => UPMSSchools::select('SCL_SchoolName')->whereColumn('SCL_SchoolCode', '=', 'upms_teacher.TCHR_SCLSchoolCode'),
            'SchoolAbb' => UPMSSchools::select('SCL_SchoolAbb')->whereColumn('SCL_SchoolCode', '=', 'upms_teacher.TCHR_SCLSchoolCode')
        ])->orderBy('TCHR_ID')->get();


        if ($Teachers->isEmpty()) {
            return view('Admin.AdminStaffList', ['ErrMsg' => 'There is no Teacher in the Database']);
        } else {
            // return $Teachers;
            return view('Admin.AdminStaffList', ['Teachers' => $Teachers, 'ErrMsg' => '']);
        }
    }

    public function AddTCHR(Request $Req)
    {
        try {
            $Data = UPMSTeachers::where(['TCHR_ID' => strtolower($Req->txtUserID)])->first();
            if ($Data) {
                $Req->session()->put('Msg', [

                    'MsgType' => 'info',
                    'MsgD' => 'This teahcer is already exists.'
                ]);
            } else {

                $Gender = '';
                if ($Req->txtCNIC[14] == '1' || $Req->txtCNIC[14] == '3' || $Req->txtCNIC[14] == '5' || $Req->txtCNIC[14] == '7' || $Req->txtCNIC[14] == '9') {
                    $Gender = 'Male';
                } else {
                    $Gender = 'Female';
                }

                $TeachersData = new UPMSTeachers;

                $TeachersData->TCHR_ID = strtolower($Req->txtUserID);
                $TeachersData->TCHR_Password = Crypt::encrypt($Req->txtUserPass);
                $TeachersData->TCHR_FirstName = $Req->txtFirstName;
                $TeachersData->TCHR_LastName = $Req->txtLastName;
                $TeachersData->TCHR_CNIC = $Req->txtCNIC;
                $TeachersData->TCHR_Address = $Req->txtAddress;
                $TeachersData->TCHR_SCLSchoolCode = $Req->cbSchool;
                $TeachersData->TCHR_PRGPCode = $Req->cbProgram;
                $TeachersData->TCHR_PRGSCode = $Req->cbSection;
                $TeachersData->TCHR_PhoneNo = $Req->txtPhoneNo;
                $TeachersData->TCHR_Email = $Req->txtEmail;
                $TeachersData->TCHR_Gender = $Gender;
                $TeachersData->TCHR_CCCityCode = $Req->cbCity;
                $TeachersData->TCHR_CCCntryCode = $Req->cbCountry;
                $TeachersData->TCHR_Specialty = $Req->txtSpecialty;
                $TeachersData->TCHR_Post = $Req->txtPost;
                $TeachersData->TCHR_Picture = '';

                if ($TeachersData->save()) {
                    $Req->session()->put('Msg', [

                        'MsgType' => 'success',
                        'MsgD' => 'Data is successfully saved.'
                    ]);
                } else {
                    $Req->session()->put('Msg', [

                        'MsgType' => 'danger',
                        'MsgD' => 'Data could not saved'
                    ]);
                }
            }
            return redirect('/admin/teachers');
        } catch (QueryException $ex) {
            dd($ex->getMessage());
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }
    }

    public function DeleteTCHR($id)
    {
        try {
            if (UPMSTeachers::where('TCHR_ID', '=', $id)->delete()) {
                session()->put('Msg', [

                    'MsgType' => 'success',
                    'MsgD' => 'Data is successfully deleted.'
                ]);
            } else {
                session()->put('Msg', [

                    'MsgType' => 'danger',
                    'MsgD' => 'Data could deleted because this Teacher doesn\'t exists.'
                ]);
            }
            return redirect('/admin/student-list');
        } catch (QueryException $ex) {
            dd($ex->getMessage());
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }
    }


    //Dashboard Related Functions
    public function AddPrograms(Request $Req)
    {
        try {
            $Data = UPMSPrograms::where(['PRG_PCode' => $Req->txtProgramCode])->where(['PRG_SCode' => $Req->txtSectionCode])->first();
            if ($Data) {
                $Req->session()->put('Msg', [

                    'MsgType' => 'info',
                    'MsgD' => 'This Program Code is already exists.'
                ]);
            } else {
                $ProgramsData = new UPMSPrograms;

                $ProgramsData->PRG_PCode = $Req->txtProgramCode;
                $ProgramsData->PRG_ProgramName = $Req->txtProgramName;
                $ProgramsData->PRG_SCode = $Req->txtSectionCode;
                $ProgramsData->PRG_SectionName = $Req->txtSectionName;
                $ProgramsData->PRG_SCLSchoolCode = $Req->cbSchool;
                $ProgramsData->PRG_TotalSemester = $Req->txtTotalSemester;
                $ProgramsData->PRG_TotalCreditHrs = $Req->txtTotalCrHr;


                if ($ProgramsData->save()) {
                    session()->put('Msg', [

                        'MsgType' => 'success',
                        'MsgD' => 'Data is successfully added.'
                    ]);
                } else {
                    session()->put('Msg', [

                        'MsgType' => 'danger',
                        'MsgD' => 'Data could not added.'
                    ]);
                }
            }
            return redirect('/admin/dashboard');
        } catch (QueryException $ex) {
            dd($ex->getMessage());
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }
    }

    public function AddSchools(Request $Req)
    {
        try {
            $Data = UPMSSchools::where(['SCL_SchoolCode' => $Req->txtSCLCode])->first();
            if ($Data) {
                $Req->session()->put('Msg', [

                    'MsgType' => 'info',
                    'MsgD' => 'This School Code is already exists.'
                ]);
            } else {
                $SchoolData = new UPMSSchools;

                $SchoolData->SCL_SchoolCode = $Req->txtSCLCode;
                $SchoolData->SCL_SchoolAbb = $Req->txtSCLAbb;
                $SchoolData->SCL_SchoolName = $Req->txtSCLName;

                if ($SchoolData->save()) {
                    session()->put('Msg', [

                        'MsgType' => 'success',
                        'MsgD' => 'Data is successfully added.'
                    ]);
                } else {
                    session()->put('Msg', [

                        'MsgType' => 'danger',
                        'MsgD' => 'Data could not added.'
                    ]);
                }
            }
            return redirect('/admin/dashboard');
        } catch (QueryException $ex) {
            dd($ex->getMessage());
        } catch (Exception $ex) {
            dd($ex->getMessage());
        }
    }
}
