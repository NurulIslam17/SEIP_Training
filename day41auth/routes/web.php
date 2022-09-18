<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
