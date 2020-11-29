<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //echo "{{$request->session()->get('Data')}}";


        if ($request->is('admin/*')) {
            if ($request->session()->has('Data') && $request->path() == "admin/login" && $request->session()->get('Data.DataType') == "Admin") {
                return redirect('admin/dashboard');
            } elseif (($request->path() != "admin/login"&& $request->path() != "admin/logout") && (!$request->session()->has('Data') || $request->session()->get('Data.DataType') != "Admin")) {
                return redirect('admin/login');
            }
        } elseif ($request->is('teacher/*')) {
            if ($request->session()->has('Data') && $request->path() == "teacher/login" && $request->session()->get('Data.DataType') == "Teacher") {
                return redirect('teacher/students/marks');
            } elseif ($request->path() != "teacher/login" && $request->session()->get('Data.DataType') != "Teacher") {
                return redirect('teacher/login');
            } elseif ($request->path() != "teacher/login" && !$request->session()->has('Data')) {
                return redirect('teacher/login');
            }
        }
        return $next($request);
    }
}
