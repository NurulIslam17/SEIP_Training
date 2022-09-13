<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/new-student',[StudentController::class,'addStudent'])->name('new.student');
//Route::get('/student-info',[HomeController::class,'allStudent'])->name('all.student');
