<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UPMSAdmin;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;

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
            return redirect('/admin');
        }
    }
}
