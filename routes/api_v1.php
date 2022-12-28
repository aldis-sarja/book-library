<?php

use App\Http\Controllers\API\v1\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books/top-ten', [BookController::class, 'topTen']);
