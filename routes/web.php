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
//testing controller

Route::get('/haha', function () {
    return view('project.choose_year_study');
});

//add new unit
Route::get('/data', 'UnitController@index');
Auth::routes();
Route::post('addnewunit', 'UnitController@store');

//adding course
Route::get('/course', 'CourseController@index');
Route::post('addcourse', 'CourseController@store');

//displaying students results
Route::get('/results', 'ResultController@show');

//display  students for grading
Route::get('/displaystudents', 'StudentController@index');
Route::get('/display', 'StudentController@show');
Route::get('/add-grade/{student_id}', 'StudentController@showGradeForm');

//registering new units
Route::get('/registerunit', 'RegisterController@index');
Route::post('/registeruser', 'HomeController@register');
Route::post('registernewunit', 'RegisterController@store');

//displaying students units acording to his/her year of study and registering the units
Route::get('/unitsdisplay', 'Unit_displayController@show');
Route::get('/register/student/unit/{unit_id}', 'Unit_displayController@studentUnit');

//grading the students to the units which they have registered
Route::get('/grade', 'GradeController@index');
Route::post('gradestudents', 'GradeController@store');

//adding and updating the student's year of study
Route::post('addyear', 'Year_of_studyController@store');
Route::get('/addyear', 'Year_of_studyController@index');
