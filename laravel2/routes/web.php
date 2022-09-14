<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FontController;



Route::get('/',[FontController::class,'index'])->name('/');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/new-student',[StudentController::class,'addStudent'])->name('new.student');
Route::post('/student-delete',[StudentController::class,'studentDelete'])->name('student.delete');
Route::get('/student-edit/{id}',[StudentController::class,'studentEdit'])->name('student.edit');
Route::post('/update.student',[StudentController::class,'updateEdit'])->name('update.student');
