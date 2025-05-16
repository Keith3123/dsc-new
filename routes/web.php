<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'home']);
Route::get('/Products', [PageController::class, 'product']);
Route::get('/projects', [PageController::class, 'proj']);
Route::get('/graphic-services', [PageController::class, 'services']);

Route::get('/locations', [PageController::class, 'loc']);


Route::get('/', function () {
    return view('pages.home');  // This points to resources/views/pages/home.blade.php
});

Route::get('/about-us', function () {
    return view('pages.AboutUs');
});

