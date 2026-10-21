<?php
 
use App\Route;
use App\Controllers\PublicController;
 
Route::get('/', [PublicController::class, 'index']);
 
Route::get('/us', [PublicController::class, 'us']);

Route::get('/tech', [PublicController::class, 'tech']);

Route::get('/forms', [PublicController::class, 'forms']);
Route::post('/forms', [PublicController::class, 'answer']);