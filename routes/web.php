<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/profile/ipnu', [ProfileController::class, 'ipnu'])->name('profile.ipnu');
Route::get('/profile/ippnu', [ProfileController::class, 'ippnu'])->name('profile.ippnu');
