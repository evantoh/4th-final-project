<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', function () {
    return view('project.student');
});
Route::get('student', function () {
    return view('project.student');
});

Route::get('haha', function () {
    return view('project.course');
});



Route::get('/home', 'HomeController@index');
Route::get('/data', 'UnitController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('addunit', 'UnitController@store');
Route::get('/course', 'CourseController@index');
Route::post('addcourse', 'CourseController@store');
Route::get('/results', 'ResultController@show');
Route::get('home', 'ResultController@index');
Route::get('/displaystudents', 'StudentController@index');
Route::get('/display', 'StudentController@show');
Route::get('/add-grade/{student_id}', 'StudentController@showGradeForm');
Route::get('/registerunit', 'RegisterController@index');
Route::post('registernew', 'RegisterController@store');
Route::get('/unitsdisplay', 'Unit_displayController@show');