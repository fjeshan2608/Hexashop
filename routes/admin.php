<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');


// Category Related
Route::get('/Add-Category', [CategoryController::class, 'index'])->name('add.category');
Route::get('/All-Category', [CategoryController::class, 'table'])->name('all.category');
Route::post('/Save-Category', [CategoryController::class, 'save'])->name('category.save');
Route::get('/Edit-Category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/Update-Category', [CategoryController::class, 'update'])->name('category.update');
Route::get('/Delete-Category/{id}', [CategoryController::class, 'del'])->name('category.del');


// Sub-Category Related
Route::get('/Add-Sub-Category', [SubCategoryController::class, 'index'])->name('add.sub-category');
Route::get('/All-Sub-Category', [SubCategoryController::class, 'table'])->name('all.sub-category');


// Products Related
Route::get('/Add-Products', [ProductsController::class, 'index'])->name('add.products');
Route::get('/All-Products', [ProductsController::class, 'table'])->name('all.products');

                
require __DIR__.'/auth.php';