<?php

use App\Http\Controllers\Contacts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Contacts::class, 'index']);
Route::get('/contacts', [Contacts::class, 'contacts']);
