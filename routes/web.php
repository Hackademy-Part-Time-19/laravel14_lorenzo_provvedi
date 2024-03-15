<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\pagecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [pagecontroller::class, 'home'])->name('home');

Route::resource('books', BookController::class);

//Route::get('/user/{user}/books', [BookController::class, 'userBooks'])->name('user.books')->middleware('auth');

route::get('user/books', [BookController::class, 'userBooks'])->name('User.books');
