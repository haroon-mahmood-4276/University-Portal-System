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

Route::get('/', function () {
    return view('Others.Index');
});


Route::post('/admin/login', 'AdminController@Login');
Route::get('/admin/logout', function () {
    Session()->forget('Admin');
    return redirect('/');
});

Route::group(['middleware' => ['AdminAuth']], function () {

    Route::view('/admin/login', 'Admin.AdminLogin');
    Route::get('/admin/dashboard', 'AdminController@Dashboard');

    Route::get('/admin/student-list', 'AdminController@StudentList');
    Route::post('/admin/student/add', 'AdminController@AddSTD');
    Route::get('/admin/student/delete/{id}', 'AdminController@DeleteSTD');

    Route::get('/admin/staff-list', 'AdminController@StaffList');
    Route::post('/admin/teacher/add', 'AdminController@AddTCHR');
    Route::get('/admin/teacher/delete/{id}', 'AdminController@DeleteTCHR');

    Route::post('/admin/programs/add', 'AdminController@AddPrograms');
    Route::post('/admin/schools/add', 'AdminController@AddSchools');

    //APIs
    Route::get('/admin/GetCitiesByCountryId', 'AdminController@GetCitiesByCountryId');
    Route::get('/admin/GetProgramBySchoolId', 'AdminController@GetProgramBySchoolId');
    Route::get('/admin/GetSectionByProgramId', 'AdminController@GetSectionByProgramId');
});
