<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthenticationController;

Route::controller(ArticleController::class)->group(function () {
    Route::get('/', 'index')->name('article.index');
});

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/login', 'index')->name('login.index');
});
