<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('app');
});
Route::get('/test', function () {
    return ["Hello"];
});

Route::get('/test2', function () {
    return ["Hello", "World"];
});

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::inertia('dashboard', 'dashboard')->name('dashboard');
// });

// require __DIR__.'/settings.php';
