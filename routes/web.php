<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin/dashboard', function () {
    return view('Admin.AdminDashboard');
});

Route::view('/admin/login', 'Admin.AdminLogin');
Route::post('/admin/login', 'AdminController@Login');

Route::get('/admin/dashboard', 'AdminController@Dashboard');
Route::get('/admin/student-list', 'AdminController@StudentList');
Route::get('/admin/staff-list', 'AdminController@StaffList');
