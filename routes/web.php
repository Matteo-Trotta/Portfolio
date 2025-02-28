<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/welcome', [PublicController::class ,'welcome'])->name('welcome');

Route::get('/aboutMe',[PublicController::class, 'aboutMe'])->name('aboutME');

Route::get('/services',[PublicController::class, 'services'])->name('services');