<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\ProductController;



Route::get('/',[FontController::class,'index'])->name('/');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/new-student',[StudentController::class,'addStudent'])->name('new.student');
Route::post('/student-delete',[StudentController::class,'studentDelete'])->name('student.delete');
Route::get('/student-edit/{id}',[StudentController::class,'studentEdit'])->name('student.edit');
Route::post('/update.student',[StudentController::class,'updateEdit'])->name('update.student');




//Route::post('/add-product',[ProductController::class,'addProduct'])->name('new.product');
//Route::post('/delete-product',[ProductController::class,'deleteProduct'])->name('delete.product');
//
//Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit.product');
//Route::post('/update-product/',[ProductController::class,'updateProduct'])->name('update.product');
