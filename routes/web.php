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
	return view('welcome') ;
})->name('landingPage');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shome', 'StudentController@index')->name('studenthome') ;
Route::get('/loginpage','Auth\StudentLoginController@showlogin')->name('showloginform');
Route::get('/registerpage','Auth\StudentLoginController@showregister')->name('registration');

Route::post('/slogout', 'SiteController@logout')->name('studentlogout') ;

Route::post('/slogin', 'Auth\StudentLoginController@login')->name('stdlogin') ;
Route::post('/sregister','Auth\StudentRegisterController@register')->name('studentregister');

Route::get('/Admin/programe', 'ProgrameController@index')->name('backendProgrameView') ;
Route::get('/Admin/course', 'CourseController@index')->name('backendCourseView')->name('course.index') ;
Route::get('/Admin/notes', 'LectureNoteController@index')->name('lectureNotesView') ;
Route::get('/Admin/assignments', 'AssignmentController@index')->name('assignmentsView') ;
Route::get('/Admin/projects', 'LecturerController@projects')->name('projectsView') ;

//Route::post('/userlogin', 'SiteController@login');
Auth::routes();
Route::get('/dash', 'DashboardController@index');
Route::post('/adminstatus', 'UserController@verifyStatus')->name('admin.status') ;

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shome', 'StudentController@index')->name('studenthome') ;
Route::post('/Admin/course', 'CourseController@store') ;
Route::patch('/Admin/course/{course}', 'CourseController@update') ;
Route::post('/Admin/programe', 'ProgrameController@store') ;

Route::resources([
    'notes' => 'LectureNoteController',
    'assignments' => 'AssignmentController',
    'projects' => 'ProjectController'
]);


