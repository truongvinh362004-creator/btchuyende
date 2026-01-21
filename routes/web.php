<?php

use Illuminate\Support\Facades\Route;

// Sử dụng đường dẫn chuỗi (String Path) để Laravel tự tìm file
Route::controller('App\Http\Controllers\PortfolioController')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/contact', 'contact')->name('contact');
});
