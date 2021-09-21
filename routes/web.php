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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student');
Route::get('/student/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('student');
Route::post('/student/update/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('student');
Route::get('/student/show/{id}', [App\Http\Controllers\StudentController::class, 'show'])->name('student');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store'])->name('student');
Route::get('/student/delete/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student');