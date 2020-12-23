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

Route::any('/{any}', function () {
    return view('Others.Master');
})->where('any', '.*');


// Route::get('/', function () {
//     return view('Others.Index');
// });

// Route::group(['middleware' => ['CustomAuth']], function () {

//     Route::view('/admin/login', 'Admin.AdminLogin');
//     Route::get('/admin/dashboard', 'AdminController@Dashboard');

//     Route::get('/admin/students', 'AdminController@StudentList');
//     Route::post('/admin/students/add', 'AdminController@AddSTD');
//     Route::get('/admin/students/delete/{id}', 'AdminController@DeleteSTD');

//     Route::get('/admin/teachers', 'AdminController@StaffList');
//     Route::post('/admin/teachers/add', 'AdminController@AddTCHR');
//     Route::get('/admin/teachers/delete/{id}', 'AdminController@DeleteTCHR');

//     Route::post('/admin/programs/add', 'AdminController@AddPrograms');
//     Route::post('/admin/schools/add', 'AdminController@AddSchools');

//     Route::post('/admin/login', 'AdminController@Login');
//     Route::get('/admin/logout', function () {
//         Session()->forget('Data');
//         return redirect('/');
//     });
// });

// Route::group(['middleware' => ['CustomAuth']], function () {

//     Route::view('/teacher/login', 'Teacher.TeacherLogin');
//     Route::post('/teacher/login', 'TeacherController@Login');

//     Route::get('/teacher/students/marks', 'TeacherController@STDMarkSheet');
//     Route::get('/teacher/logout', function () {
//         Session()->forget('Data');
//         return redirect('/');
//     });
// });
