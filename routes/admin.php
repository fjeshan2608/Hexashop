<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');


// Category Related
Route::get('/Add-Category', [CategoryController::class, 'index'])->name('add.category');
Route::get('/All-Category', [CategoryController::class, 'table'])->name('all.category');


// Sub-Category Related
Route::get('/Add-Sub-Category', [SubCategoryController::class, 'index'])->name('add.sub-category');
Route::get('/All-Sub-Category', [SubCategoryController::class, 'table'])->name('all.sub-category');


// Color Related
Route::get('/Add-Color', [ColorController::class, 'index'])->name('add.color');
Route::get('/All-Color', [ColorController::class, 'table'])->name('all.color');


// Size Related
Route::get('/Add-Size', [SizeController::class, 'index'])->name('add.size');
Route::get('/All-Size', [SizeController::class, 'table'])->name('all.size');


// Products Related
Route::get('/Add-Products', [ProductsController::class, 'index'])->name('add.products');
Route::get('/All-Products', [ProductsController::class, 'table'])->name('all.products');

                
require __DIR__.'/auth.php';