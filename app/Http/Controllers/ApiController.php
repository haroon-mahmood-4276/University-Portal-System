<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use App\Models\UPMSAdmin;
use Illuminate\Http\Request;
use App\Models\UPMSCityCountry;
use App\Models\UPMSPrograms;
use App\Models\UPMSSchools;
use App\Models\UPMSExams;
use App\Models\UPMSStudents;

class ApiController extends Controller
{
    // public function Login(Request $Req)
    // {
    //     if ($Req->is('api/admin/login')) {
    //         $Data = UPMSAdmin::select('ADMIN_ID AS ID', 'ADMIN_Password AS Password', 'ADMIN_FirstName AS FirstName', 'ADMIN_LastName AS LastName')->where(['ADMIN_ID' => strtolower($Req->txtUserID)])->first();
    //         $Data['LoginRole'] = 'Admin';
    //         if (!$Data  || !($Req->txtPassword == Crypt::decrypt($Data->Password))) {
    //             $Data['Msg'] = [
    //                 'MsgType' => 'danger',
    //                 'MsgDesc' => 'User ID or Passowrd is incorrect.'
    //             ];
    //             return response()->json($Data);
    //         } else {
    //             $Data['LoginRole'] = 'Admin';
    //             return response()->json($Data);
    //         }
    //     }
    // }

    public function GetCountries()
    {
        $Country = UPMSCityCountry::select('CC_CntryCode', 'CC_CntryName')->distinct()->get();
        return response()->json($Country);
    }

    public function GetCitiesByCountryId($id)
    {
        $City = UPMSCityCountry::select('CC_CityCode', 'CC_CityName')->where('CC_CntryCode', $id)->orderBy('CC_CityName')->get();
        return response()->json($City);
    }

    public function GetSchools()
    {
        return response()->json(UPMSSchools::select('SCL_SchoolCode', 'SCL_SchoolName', 'SCL_SchoolAbb')->get());
    }

    public function GetPrograms()
    {
        return response()->json(UPMSPrograms::select('PRG_PCode', 'PRG_ProgramName')->get());
    }

    public function GetExams()
    {
        return response()->json(UPMSExams::select('EXAM_ID', 'EXAM_Name')->get());
    }

    public function GetProgramBySchoolId($id)
    {
        $Program = UPMSPrograms::select('PRG_PCode', 'PRG_ProgramName')->where('PRG_SCLSchoolCode', $id)->orderBy('PRG_ProgramName')->get();
        return response()->json($Program);
    }

    public function GetSectionByProgramId($id)
    {
        $Section = UPMSPrograms::select('PRG_SCode', 'PRG_SectionName')->where('PRG_PCode', $id)->orderBy('PRG_SectionName')->get();
        return response()->json($Section);
    }

    public function GetStudentByPIDSID($progamid, $id)
    {
        $Students = UPMSStudents::select('STD_RollNo', 'STD_FirstName', 'STD_LastName');
        $Students = $Students->addSelect([
            'Program' => UPMSPrograms::select('PRG_ProgramName')->whereColumn('PRG_PCode', '=', 'upms_teacher.TCHR_SCLSchoolCode'),
            'Section' => UPMSPrograms::select('PRG_SectionName')->whereColumn('PRG_SCode', '=', 'upms_teacher.TCHR_SCLSchoolCode')
        ])->orderBy('TCHR_ID')->get();
        return response()->json($Students);
    }
}
