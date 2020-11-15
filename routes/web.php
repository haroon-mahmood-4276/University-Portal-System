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

    Route::post('/admin/login', 'AdminController@Login');
    Route::get('/admin/logout', function () {
        Session()->forget('Admin');
        return redirect('/');
    });


});

Route::group(['middleware' => ['TeacherAuth']], function () {

    Route::view('/teacher/login', 'Teacher.TeacherLogin');
    Route::post('/teacher/login', 'TeacherController@Login');

    Route::get('/teacher/marksheet', 'TeacherController@STDMarkSheet');

    Route::get('/teacher/logout', function () {
        Session()->forget('Teacher');
        return redirect('/');
    });
});
