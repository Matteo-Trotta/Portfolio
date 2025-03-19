<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'welcome'])->name('home');
Route::get('/welcome', [PublicController::class, 'welcome'])->name('welcome');
Route::redirect('/welcome', '/');


Route::get('/aboutMe',[PublicController::class, 'aboutMe'])->name('aboutMe');

Route::get('/services',[PublicController::class, 'services'])->name('services');