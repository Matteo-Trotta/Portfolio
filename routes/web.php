<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContattiController;
use App\Http\Controllers\ContactFormController;

Route::get('/', [PublicController::class, 'welcome'])->name('home');

Route::get('/welcome', [PublicController::class, 'welcome'])->name('welcome');

Route::redirect('/welcome', '/');


Route::get('/aboutMe', [PublicController::class, 'aboutMe'])->name('aboutMe');

Route::get('/services', [PublicController::class, 'services'])->name('services');

Route::get('/preventivo', [PublicController::class, 'preventivo'])->name('preventivo');

Route::post('/submit', [ContactFormController::class, 'submit'])->name('submit');