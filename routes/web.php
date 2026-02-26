<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/books/create", [BookController::class, 'create']);
Route::Post("/books", [BookController::class, 'store']);
Route::get("/books", [BookController::class, 'index']);