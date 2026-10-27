<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});


Route::get('/post/{id}', function () {
    return inertia('Test');
});
