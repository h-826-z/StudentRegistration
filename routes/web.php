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


// Route::get('/ucsm','Controller@index');
// Route::post('/ucsm','RegisterController@register')->name('register_post');

// //a herf link route
// Route::get('/reg_student',function(){
//     return view('reg_student');
// });
// Route::get('/login_student',function(){
//     return view('login_student');
// });
Route::Resource('/ucsm','StudentController');
Route::get('students','StuViewController@index')->name('stu'); 

