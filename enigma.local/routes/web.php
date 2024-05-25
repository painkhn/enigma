<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('components.index');
// })->name('main');

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/profile/{id}', 'profile')->name('profile')->middleware('auth');
    Route::get('/theme_create', 'create')->name('theme_create');
    Route::get('/{category}', 'category_page')->name('category_page');
});
Route::controller(App\Http\Controllers\ThemeController::class)->group(function(){
    Route::post('/new_theme', 'create_theme')->name('NewTheme')->middleware('auth'); #Мб перенести в контроллер
    Route::get('/theme/{theme_id}', 'theme')->name('theme');
});
