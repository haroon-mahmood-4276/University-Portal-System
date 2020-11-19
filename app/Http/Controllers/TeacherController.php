<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UPMSAdmin;
use App\Models\UPMSCityCountry;
use App\Models\UPMSPrograms;
use App\Models\UPMSSchools;
use App\Models\UPMSStudents;
use App\Models\UPMSTeachers;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Crypt;

class TeacherController extends Controller
{
    public function Login(Request $Req)
    {
        try {
            $Data = UPMSTeachers::select('TCHR_ID AS ID', 'TCHR_Password', 'TCHR_FirstName AS FirstName', 'TCHR_LastName AS LastName')->where(['TCHR_ID' => strtolower($Req->txtUserID)])->first();
            if (!$Data  || !($Req->txtPassword == Crypt::decrypt($Data->TCHR_Password))) {
                $Req->session()->put('Msg', [
                    'MsgType' => 'danger',
                    'MsgD' => 'User ID or Passowrd is incorrect.'
                ]);
                return redirect('/teacher/login');
            } else {
                $Data['DataType'] = 'Teacher';
                $Req->session()->put('Data', $Data);
                return redirect('/teacher/students/marks');
            }
        } catch (QueryException $ex) {
            dump($ex->getMessage());
        } catch (Exception $ex) {
            dump($ex->getMessage());
        }
    }

    public function STDMarkSheet()
    {

        return view('Teacher.TeacherMarksSheet');
    }
}
