<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', [HomeController::class, "index"]);

//Route::get('/book', [BookController::class, 'index']);

Route::get("/create", [StoreController::class,"store"]);

Route::get('/show', [StoreController::class, 'show']);
