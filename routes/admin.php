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
Route::get('/All-Category', [CategoryController::class, 'table'])->name('all.category');
Route::post('/Save-Category', [CategoryController::class, 'save'])->name('category.save');
Route::get('/Edit-Category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/Update-Category', [CategoryController::class, 'update'])->name('category.update');
Route::get('/Delete-Category/{id}', [CategoryController::class, 'del'])->name('category.del');


// Sub-Category Related
Route::get('/All-Sub-Category', [SubCategoryController::class, 'table'])->name('all.sub-category');
Route::post('/Save-Sub-Category', [SubCategoryController::class, 'save'])->name('sub-category.save');
Route::get('/Edit-Sub-Category/{id}', [SubCategoryController::class, 'edit'])->name('sub-category.edit');
Route::post('/Update-Sub-Category', [SubCategoryController::class, 'update'])->name('sub-category.update');
Route::get('/Delete-Sub-Category/{id}', [SubCategoryController::class, 'del'])->name('sub-category.del');


// Products Related
Route::get('/Add-Products', [ProductsController::class, 'index'])->name('add.products');
Route::get('/All-Products', [ProductsController::class, 'table'])->name('all.products');
Route::post('/Save-Product', [ProductsController::class, 'save'])->name('product.save');
Route::get('/View-Product/{id}', [ProductsController::class, 'view'])->name('product.view');
Route::get('/Edit-Product/{id}', [ProductsController::class, 'edit'])->name('product.edit');
Route::post('/Update-Products', [ProductsController::class, 'update'])->name('product.update');
Route::get('/Delete-Products/{id}', [ProductsController::class, 'del'])->name('product.del');

                
require __DIR__.'/auth.php';