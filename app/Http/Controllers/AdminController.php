<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UPMSAdmin;
use App\Models\UPMSCityCountry;
use App\Models\UPMSPrograms;
use App\Models\UPMSSchools;
use App\Models\UPMSStudents;
use App\Models\UPMSTeachers;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function Login(Request $_Req)
    {
        $Data = UPMSAdmin::where(['ADMIN_ID' => strtolower($_Req->txtUserID)])->first();
        if (!$Data  || !($_Req->txtPassword == Crypt::decrypt($Data->ADMIN_Password))) {
            $_Req->session()->put('Msg', [
                'MsgNo' => '1',
                'MsgType' => 'danger',
                'MsgD' => 'User ID or Passowrd is incorrect.'
            ]);
            return redirect('/admin/login');
        } else {
            $_Req->session()->put('Admin', $Data);
            return redirect('/admin/dashboard');
        }
    }

    public function Dashboard()
    {
        $Programs = UPMSPrograms::count();
        $Schools = UPMSSchools::count();
        $Students = UPMSStudents::count();
        $Teachers = UPMSTeachers::count();

        return view('Admin.AdminDashboard', ['Programs' => $Programs, 'Schools' => $Schools, 'Students' => $Students, 'Teachers' => $Teachers]);
    }

    public function StaffList()
    {
        $Teachers = UPMSTeachers::select('TCHR_ID', 'TCHR_FirstName', 'TCHR_LastName', 'TCHR_Post');
        $Teachers = $Teachers->addSelect([
            'SchoolName' => UPMSSchools::select('SCL_SchoolName')->whereColumn('SCL_SchoolCode', '=', 'upms_teacher.TCHR_SCLSchoolCode'),
            'SchoolAbb' => UPMSSchools::select('SCL_SchoolAbb')->whereColumn('SCL_SchoolCode', '=', 'upms_teacher.TCHR_SCLSchoolCode')
        ])->get();

        if ($Teachers->isEmpty()) {
            return view('Admin.AdminStaffList', ['ErrMsg' => 'There is no Teacher in the Database']);
        } else {
            // return $Teachers;
            return view('Admin.AdminStaffList', ['Teachers' => $Teachers, 'ErrMsg' => '']);
        }
    }

    public function StudentList()
    {
        $Students = UPMSStudents::select('STD_RollNo', 'STD_FirstName', 'STD_LastName');
        $Students = $Students->addSelect([
            'STDProgram' => UPMSPrograms::select('PRG_ProgramName')->whereColumn('PRG_PCode', '=', 'upms_students.STD_PRGPCode'),
            'STDSection' => UPMSPrograms::select('PRG_SectionName')->whereColumn('PRG_PCode', '=', 'upms_students.STD_PRGPCode')->whereColumn('PRG_SCode', '=', 'upms_students.STD_PRGSCode'),
            'SchoolName' => UPMSSchools::select('SCL_SchoolName')->whereColumn('SCL_SchoolCode', '=', 'upms_students.STD_SCLSchoolCode'),
            'SchoolAbb' => UPMSSchools::select('SCL_SchoolAbb')->whereColumn('SCL_SchoolCode', '=', 'upms_students.STD_SCLSchoolCode')
        ])->orderBy('STD_RollNo')->get();


        $Schools = UPMSSchools::all();
        $Country = UPMSCityCountry::select('CC_CntryCode', 'CC_CntryName')->distinct()->get();

        if ($Students->isEmpty()) {
            return view('Admin.AdminStdList', ['ErrMsg' => 'There is no Student in the Database']);
        } else {
            // return $Students;
            return view('Admin.AdminStdList', ['Students' => $Students, 'Schools' => $Schools, 'Country' => $Country, 'ErrMsg' => '']);
        }
    }

    public function GetCitiesByCountryId(Request $_Req)
    {
        $City = UPMSCityCountry::select('CC_CityCode', 'CC_CityName')->where('CC_CntryCode', $_Req->id)->orderBy('CC_CityName')->get();
        return response()->json($City);
    }

    public function GetProgramBySchoolId(Request $_Req)
    {
        $Program = UPMSPrograms::select('PRG_PCode', 'PRG_ProgramName')->where('PRG_SCLSchoolCode', $_Req->id)->orderBy('PRG_ProgramName')->get();
        return response()->json($Program);
    }

    public function GetSectionByProgramId(Request $_Req)
    {
        $Section = UPMSPrograms::select('PRG_SCode', 'PRG_SectionName')->where('PRG_PCode', $_Req->id)->orderBy('PRG_SectionName')->get();
        return response()->json($Section);
    }

    public function AddSTD(Request $Req)
    {
        // return $Req->input();

        $Gender = '';
        if($Req->txtCNIC[14] == '1' || $Req->txtCNIC[14] == '3' || $Req->txtCNIC[14] == '5' || $Req->txtCNIC[14] == '7' || $Req->txtCNIC[14] == '9' ){
            $Gender = 'Male';
        }else {
            $Gender = 'Female';
        }

        echo $Gender;

        $StudentsData = new UPMSStudents;

        $StudentsData->STD_RollNo = strtolower($Req->txtUserID);
        $StudentsData->STD_Password = Crypt::encrypt($Req->txtUserPass);
        $StudentsData->STD_FirstName = $Req->txtFirstName;
        $StudentsData->STD_LastName = $Req->txtLastName;
        $StudentsData->STD_CNIC = $Req->txtCNIC;
        $StudentsData->STD_Address = $Req->txtAddress;
        $StudentsData->STD_SCLSchoolCode = $Req->cbSchool;
        $StudentsData->STD_PRGPCode = $Req->cbProgram;
        $StudentsData->STD_PRGSCode = $Req->cbSection;
        $StudentsData->STD_CrntSemester = $Req->cbCurrentSemester;
        $StudentsData->STD_PhoneNo = $Req->txtPhoneNo;
        $StudentsData->STD_Email = $Req->txtEmail;
        $StudentsData->STD_Gender = $Gender;
        $StudentsData->STD_CCCityCode = $Req->cbCity;
        $StudentsData->STD_CCCntryCode = $Req->cbCountry;
        $StudentsData->STD_Picture = '';

        if($StudentsData->save()){
            $Req->session()->put('Msg', [
                'MsgNo' => '1',
                'MsgType' => 'success',
                'MsgD' => 'Data is successfully saved.'
            ]);
            return redirect('/admin/student-list');
        }else {
            $Req->session()->put('Msg', [
                'MsgNo' => '2',
                'MsgType' => 'danger',
                'MsgD' => 'Data could saved'
            ]);
        }
    }
}
