<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'home']);
Route::get('/Products', [PageController::class, 'product']);
Route::get('/projects', [PageController::class, 'proj']);
Route::get('/about-us', [PageController::class, 'aboutus']);
Route::get('/contacts', [PageController::class, 'contacts']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/locations', [PageController::class, 'loc']);

// routes/web.php

Route::get('/', function () {
    return view('pages.home');  // This points to resources/views/pages/home.blade.php
});
