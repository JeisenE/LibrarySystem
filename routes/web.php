<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/view-all', [App\Http\Controllers\BookController::class, 'viewAll'])->name('view-all');

Route::get('/login-page', function () {
    return view('login');
})->name('login-page');

Route::get('/regist-page', function () {
    return view('register');
})->name('regis-page');

Route::delete('author/{author}',[AuthorController::class, 'destroy'])->name('author.destroy');
