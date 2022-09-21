<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FontendController;

Route::get('/',[FontendController::class,'index'])->name('home.page');
Route::get('/product-details/{id}',[FontendController::class,'productDetails'])->name('product.details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard.dashboard');
    })->name('dashboard');

    Route::get('/add-product',[ProductController::class,'addProduct'])->name('add.product');
    Route::get('/view-product',[ProductController::class,'viewProduct'])->name('view.product');
    //new.product
    Route::post('/new-product',[ProductController::class,'newProduct'])->name('new.product');
    //delete.product
    Route::post('/delete-product',[ProductController::class,'deleteProduct'])->name('delete.product');
    //edit.product
    Route::post('/edit-product',[ProductController::class,'editProduct'])->name('edit.product');
    //updated.product
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update.product');
});
