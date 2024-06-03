<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsBan;

Auth::routes();

Route::controller(App\Http\Controllers\AdminController::class)->group(function(){
    Route::get('/admin', 'open_admin')->name('AdminPanel');
    Route::post('/admin', 'user_search')->name('userSearch');
    Route::get('/admin/ban_user/{id}', 'ban_user')->name('BanUser');
});
Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/', 'index')->name('index')->middleware([IsBan::class]);
    Route::post('/search', 'search')->name('search')->middleware([IsBan::class]);
    Route::get('/profile/{id}/themes', 'themes_by')->name('user_themes')->middleware([IsBan::class]);
    Route::get('/profile/{id}', 'profile')->name('profile')->middleware([IsBan::class, 'auth']);;
    Route::get('/theme_create', 'create')->name('theme_create')->middleware([IsBan::class]);
    Route::get('/{category}', 'category_page')->name('category_page')->middleware([IsBan::class]);
    Route::get('/ban', 'banned')->name('bannedUser')->middleware([IsBan::class]);
});
Route::controller(App\Http\Controllers\ThemeController::class)->group(function(){
    Route::post('/new_theme', 'create_theme')->name('NewTheme')->middleware('auth'); 
    Route::post('/new_comment/{theme_id}', 'comment_create')->name('newComment')->middleware('auth');
    Route::get('/delete_comment/{comment_id}', 'comment_delete')->name('deleteComment')->middleware('auth');
    Route::get('/theme/{theme_id}', 'theme')->name('theme');
});
