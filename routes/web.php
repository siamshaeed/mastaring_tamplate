<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/pricing',[HomeController::class, 'pricing'])->name('pricing');
Route::get('/get_start',[HomeController::class, 'getstart'])->name('getstarts');
