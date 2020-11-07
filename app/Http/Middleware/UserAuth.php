<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        if ($request->path() == "admin/login" && $request->session()->has('Admin')) {
            return redirect('admin/dashboard');
        } elseif ($request->path() != "admin/login" && !$request->session()->has('Admin')) {
            return redirect('admin/login');
        }
        return $next($request);
    }
}
