<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.index');
Route::post('/contato', [LandingPageController::class, 'store'])->name('landing.store');
