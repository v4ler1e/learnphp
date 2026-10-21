<?php

use App\Controllers\PostController;
use App\Controllers\PublicController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);

Route::get('/forms', [PublicController::class, 'forms']);

Route::post('/forms', [PublicController::class, 'answer']);

Route::get('/admin/posts', [PostController::class, 'index']);