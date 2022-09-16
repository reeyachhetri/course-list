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


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('admin/course', 'App\Http\Controllers\Admin\CourseController@index')->name('admin.course.index');
Route::get('admin/course/create', 'App\Http\Controllers\Admin\CourseController@create')->name('create');
Route::post('admin/course/store', 'App\Http\Controllers\Admin\CourseController@store')->name('course.store');

Route::get('admin/login', 'App\Http\Controllers\Admin\LoginController@create')->name('login');
Route::get('home/index', 'App\Http\Controllers\Admin\HomeController@index');
Route::get('admin/courserio', 'App\Http\Controllers\Admin\AdminController@index')->name('admin.index');

Route::get('admin/faculty', 'App\Http\Controllers\Admin\FacultyController@index')->name('faculty');
Route::get('course/form', 'App\Http\Controllers\Admin\FormController@index')->name('form');


Route::get('/', 'App\Http\Controllers\Frontend\HomeController@home')->name('home');