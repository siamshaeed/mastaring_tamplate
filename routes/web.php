<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\MrouteController;




Route::get('/', [MrouteController::class, 'homepage'])->name('index');
Route::get('/about', [MrouteController::class, 'about'])->name('about');
Route::get('/contact', [MrouteController::class, 'contact'])->name('contact');
Route::get('/pricing',[MrouteController::class, 'pricing'])->name('pricing');
Route::get('/get_start',[MrouteController::class, 'getstart'])->name('getstarts');


Auth::routes();
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
