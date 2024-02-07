<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* This is the about us root */
Route::resource('/about_us', App\Http\Controllers\AboutUs::class);
/* This is the courses root */
Route::resource('/courses', App\Http\Controllers\CourseController::class);
/* This is the schools root */
Route::resource('/schools', App\Http\Controllers\SchoolController::class);
/* AJAX */
Route::post('/isUsedResponse', [UserController::class, 'isUsedResponse'])->name('isUsedResponse');
