<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('components.index');
// })->name('main');

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/profile', 'profile')->name('profile')->middleware('auth');
});
