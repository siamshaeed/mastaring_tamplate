<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;


Route::get('/', [MrouteController::class, 'homepage'])->name('home');
Route::get('/about', [MrouteController::class, 'about'])->name('about');
Route::get('/contact', [MrouteController::class, 'contact'])->name('contact');
Route::get('/pricing',[MrouteController::class, 'pricing'])->name('pricing');
Route::get('/get_start',[MrouteController::class, 'getstart'])->name('getstarts');
