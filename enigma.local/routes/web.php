<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.index');
})->name('main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
