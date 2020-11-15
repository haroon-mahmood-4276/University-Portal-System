<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TeacherAuth
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
        if ($request->path() == "teacher/login" && $request->session()->has('Teacher')) {
            return redirect('teacher/marksheet');
        } elseif ($request->path() != "teacher/login" && !$request->session()->has('Teacher')) {
            return redirect('teacher/login');
        }
        return $next($request);
    }
}
