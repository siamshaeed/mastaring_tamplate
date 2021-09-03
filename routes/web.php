<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\MrouteController;
use App\Http\Controllers\CategoryController;




// ForntEnd
Route::get('/', [MrouteController::class, 'homepage'])->name('index');
Route::get('/about', [MrouteController::class, 'about'])->name('about');
Route::get('/contact', [MrouteController::class, 'contact'])->name('contact');
Route::get('/pricing',[MrouteController::class, 'pricing'])->name('pricing');
Route::get('/get_start',[MrouteController::class, 'getstart'])->name('getstarts');

// Category 
Route::get('/category/add-category',[CategoryController::class, 'addCategory'])->name('addCategory');
Route::post('/category/new-category',[CategoryController::class, 'newCategory'])->name('new-category');
Route::get('/category/manage-category',[CategoryController::class, 'manageCategory'])->name('manageCategory');
Route::get('/category/edit-category/{id}',[CategoryController::class, 'editCategory'])->name('editCategory');
Route::post('/category/update-category',[CategoryController::class, 'updateCategory'])->name('updateCategory');

// Auth
Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');


