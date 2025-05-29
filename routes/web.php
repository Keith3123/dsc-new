<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;

// Static Pages
Route::get('/', [PageController::class, 'home']);
Route::get('/products', [PageController::class, 'product'])->name('pages.product');
Route::get('/projects', [PageController::class, 'proj'])->name('pages.proj');
Route::get('/graphic-services', [PageController::class, 'services'])->name('pages.services');
Route::get('/about-us', [PageController::class, 'aboutus'])->name('pages.aboutus');

// Chat Section Page (Form)
Route::get('/chat-designer', function () {
    return view('pages.ChatSection');
})->name('chat.designer');

// Form Submission (POST)
Route::post('/chat-designer', [PageController::class, 'send'])->name('chat-designer');
