<?php

// use Illuminate\Contracts\Session\Session;
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

//Route::view('/admin/login', 'Admin.AdminLogin');
Route::post('/admin/login', 'AdminController@Login');

Route::get('/admin/logout', function () {
    Session()->forget('Admin');
    return redirect('admin/login');
});

Route::group(['middleware' => ['AdminAuth']], function () {

    Route::view('/admin/login', 'Admin.AdminLogin');
    Route::get('/admin/dashboard', 'AdminController@Dashboard');
    Route::get('/admin/student-list', 'AdminController@StudentList');
    Route::get('/admin/staff-list', 'AdminController@StaffList');
    Route::post('/admin/student/add', 'AdminController@AddSTD');

    //APIs
    Route::get('/admin/GetCitiesByCountryId', 'AdminController@GetCitiesByCountryId');
    Route::get('/admin/GetProgramBySchoolId', 'AdminController@GetProgramBySchoolId');
    Route::get('/admin/GetSectionByProgramId', 'AdminController@GetSectionByProgramId');
});
