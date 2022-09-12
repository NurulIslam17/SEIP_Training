<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'aboutFn'])->name('about');
Route::get('/contact',[HomeController::class,'contactFn'])->name('contact');
Route::get('/login',[HomeController::class,'loginFn'])->name('login');
