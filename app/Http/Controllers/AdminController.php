<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UPMSAdmin;
use App\Models\UPMSPrograms;
use App\Models\UPMSSchools;
use App\Models\UPMSStudents;
use App\Models\UPMSTeachers;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function Login(Request $_Req)
    {
        $Data = UPMSAdmin::where(['ADMIN_ID' => $_Req->txtUserID])->first();
        if (!$Data  || !Hash::check($_Req->txtPassword, $Data->ADMIN_Password)) {
            $_Req->session()->flash('Msg', [
                'MsgNo' => '1',
                'MsgType' => 'Login Error',
                'MsgD' => 'User ID or Passowrd is incorrect.'
            ]);
            return redirect('/admin/login');
        } else {
            $_Req->session()->put('Data', $Data);
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
        $Students = UPMSTeachers::select('STD_RollNo', 'STD_FirstName', 'STD_LastName', 'TCHR_Post');
        $TeaStudentschers = $Students->addSelect([
            'SchoolName' => UPMSSchools::select('SCL_SchoolName')->whereColumn('SCL_SchoolCode', '=', 'upms_teacher.TCHR_SCLSchoolCode'),
            'SchoolAbb' => UPMSSchools::select('SCL_SchoolAbb')->whereColumn('SCL_SchoolCode', '=', 'upms_teacher.TCHR_SCLSchoolCode')
        ])->get();

        if ($Students->isEmpty()) {
            return view('Admin.AdminStaffList', ['ErrMsg' => 'There is no Student in the Database']);
        } else {
            // return $Students;
            return view('Admin.AdminStdList', ['Students' => $Students, 'ErrMsg' => '']);
        }
    }
}
