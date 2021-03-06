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

Route::get('/yuyu', function () {
    return view('project.comment_student');
});
Route::get('/', 'HomeController@home');


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
Route::get('user/delete/{id}', 'RegisterController@delete');

//displaying students units acording to his/her year of study and registering the units
Route::get('/unitsdisplay', 'Unit_displayController@show');
Route::get('/register/student/unit/{unit_id}', 'Unit_displayController@studentUnit');

//grading the students to the units which they have registered
Route::get('/grade', 'GradeController@index');
Route::post('gradestudents', 'GradeController@store');

//adding and updating the student's year of study
Route::post('addyear', 'Year_of_studyController@store');
Route::get('/addyear', 'Year_of_studyController@index');
Route::get('/cf', 'StudentController@cf');
//help button
Route::get('/help_operator', function ()
{
    return view('project.help_data_entry');
});
Route::get('/help_student', function ()
{
    return view('project.help_student');
});



//displaying all the units
    Route::get('/assignunitslecturer', 'Display_all_unitsController@show');
    Route::get('/assign/unit/{unit_id}', 'Display_all_unitsController@assignunit');
    Route::post('/lecturerunit', 'Lecturer_unitController@store');
    Route::get('/assign', 'Lecturer_unitController@index');
//displaying all units taught by lecturer assigned to
    Route::get('/teaches', 'Lecturer_teachController@show');
    Route::get('/unit/all-students/{unit_id}', 'Lecturer_teachController@students');
    Route::post('commentstudent', 'Lecturer_teachController@commentStudent');
    Route::get('/comment/student/result/{user_id}/{unit_id}', 'Lecturer_teachController@index');
//managing users
    Route::get('/manageusers', 'User_managementController@show');
    Route::post('editusers', 'User_managementController@useredit');
