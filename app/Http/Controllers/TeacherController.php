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
    public function Login(Request $_Req)
    {
        try {
            $Data = UPMSTeachers::where(['TCHR_ID' => strtolower($_Req->txtUserID)])->first();
            if (!$Data  || !($_Req->txtPassword == Crypt::decrypt($Data->TCHR_Password))) {
                $_Req->session()->put('Msg', [
                    'MsgType' => 'danger',
                    'MsgD' => 'User ID or Passowrd is incorrect.'
                ]);
                return redirect('/teacher/login');
            } else {
                $_Req->session()->put('Teacher', $Data);
                return redirect('/teacher/marksheet');
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
