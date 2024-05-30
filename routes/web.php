<?php

use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index2']);
Route::get('/user/{id}', [UserController::class, 'get']);
Route::post('/store-user', [UserController::class, 'store']);
Route::post('/resume/{id}', [PdfGeneratorController::class, 'index']);
