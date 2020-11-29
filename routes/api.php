<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => ['ApiAuth']], function () {
    //APIs
});
Route::get('/countries', 'ApiController@GetCountries');
Route::get('/cities', 'ApiController@GetSchools');
Route::get('/schools', 'ApiController@GetSchools');
Route::get('/programs', 'ApiController@GetPrograms');
Route::get('/exams', 'ApiController@GetExams');

Route::get('/countries/{id}/cities', 'ApiController@GetCitiesByCountryId');
Route::get('/schools/{id}/programs', 'ApiController@GetProgramBySchoolId');
Route::get('/programs/{id}/sections', 'ApiController@GetSectionByProgramId');
Route::get('/programs/{progamid}/sections/{id}/students', 'ApiController@GetStudentByPIDSID');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
