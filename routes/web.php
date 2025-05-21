<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;



Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'product'])->name('pages.product');
Route::get('/projects', [PageController::class, 'proj'])-> name('pages.proj');
Route::get('/graphic-services', [PageController::class, 'services'])->name('pages.services');
Route::get('/about-us', [PageController::class, 'aboutus'])->name('pages.aboutus');

