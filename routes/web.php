<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaxCalculatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DirectorateController;
use Illuminate\Support\Facades\Auth;

Route::get('/', MainController::class)->name('home');

Auth::routes();

Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('directorates', DirectorateController::class);

    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });
});


Route::controller(TaxCalculatorController::class)->prefix('tax-calculator')->group(function () {
    Route::get('/', 'index')->name('individual.tax-calculator');
    Route::post('/calculate', 'calculate')->name('calculate.tax');
});
