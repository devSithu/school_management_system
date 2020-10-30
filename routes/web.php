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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if(Auth::check()){
        if(Auth::user()->role == "admin"){
            return redirect()->route('adminDashboard');
        }else if(Auth::user()->role == "teacher"){
            return redirect()->route('teacherDashboard');
        }else if(Auth::user()->role == "student"){
            return redirect()->route('studentDashboard');
        }
    }
})->name('dashboard');

Route::group([ 'prefix'=>'admin' , 'namespace'=>'Admin' ],function(){
    Route::get('dashboard','AdminController@dashboard')->name('adminDashboard');

});

Route::group([ 'prefix'=>'teacher' , 'namespace'=>'Teacher' ],function(){
    Route::get('dashboard','TeacherController@dashboard')->name('teacherDashboard');
});

Route::group([ 'prefix'=>'student' , 'namespace'=>'Student' ],function(){
    Route::get('dashboard','StudentController@dashboard')->name('studentDashboard');
    Route::get('lookTeacher','StudentController@lookTeacher')->name('studentLookTeacher');
    Route::get('studentProfile','StudentController@studentProfile')->name('studentProfile');
    Route::get('lookClass','StudentController@lookClass')->name('lookClass');
    Route::get('lookRequestCourse','StudentController@lookRequestCourse')->name('lookRequestCourse');
    Route::get('lookNews','StudentController@lookNews')->name('lookNews');
});