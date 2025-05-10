<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControlle;



Route::get('/', [PageControlle::class, 'home']);
Route::get('/contact', [PageControlle::class, 'contacts']);
Route::get('/about', [PageControlle::class, 'aboutus']);
