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
        if ($request->is('admin/*')) {
            if ($request->path() == "admin/login" && $request->session()->has('Data')) {
                return redirect('admin/dashboard');
            } elseif ($request->path() != "admin/login" && !$request->session()->has('Data')) {
                return redirect('admin/login');
            }
        } elseif ($request->is('teacher/*')) {
            if ($request->path() == "teacher/login" && $request->session()->has('Data')) {
                return redirect('teacher/student/marks');
            } elseif ($request->path() != "teacher/login" && !$request->session()->has('Data')) {
                return redirect('teacher/login');
            }
        }

        return $next($request);
    }
}
