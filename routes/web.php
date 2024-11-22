<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::controller(IndexController::class)->middleware('web')->group(function () {
    Route::get('/', 'index')->name('home2.index');
});

Route::controller(DashboardController::class)->middleware(['web', 'auth'])->group(function () {
    Route::get('/board', 'index')->name('board.index');
});

Route::group(['middleware' => 'web'], function () {
    Route::post('/login-submit', [LoginController::class, 'submit'])->name('login.submit');
    Route::get('/register-silaw', [LoginController::class, 'register'])->name('newregister');
    Route::post('/register-silaw', [LoginController::class, 'registerSubmit'])->name('newregister.submit');
});
