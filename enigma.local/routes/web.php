<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/profile/{id}/themes', 'themes_by')->name('user_themes');
    Route::get('/profile/{id}', 'profile')->name('profile')->middleware('auth');
    Route::get('/theme_create', 'create')->name('theme_create');
    Route::get('/{category}', 'category_page')->name('category_page');
});
Route::controller(App\Http\Controllers\ThemeController::class)->group(function(){
    Route::post('/new_theme', 'create_theme')->name('NewTheme')->middleware('auth'); 
    Route::post('/new_comment/{theme_id}', 'comment_create')->name('newComment')->middleware('auth');
    Route::get('/delete_comment/{comment_id}', 'comment_delete')->name('deleteComment')->middleware('auth');
    Route::get('/theme/{theme_id}', 'theme')->name('theme');
});
