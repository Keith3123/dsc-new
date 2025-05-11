<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/Home', [PageController::class, 'home']);
Route::get('/contact', [PageController::class, 'contacts']);
Route::get('/about', [PageController::class, 'aboutus']);
