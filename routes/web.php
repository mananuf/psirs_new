<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TaxCalculatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DirectorateController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

Route::get('/', MainController::class)->name('home');

Auth::routes();

Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('directorates', DirectorateController::class);
    Route::resource('posts', BlogController::class);

    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');
    });
});

Route::controller(PagesController::class)->group(function () {
    Route::get('directorate/{directorate}',  'directorate')->name('show.directorate');
    Route::get('posts',  'posts')->name('posts.index');
    Route::get('show/post/{post}',  'showPost')->name('posts.show');
});

Route::controller(TaxCalculatorController::class)->prefix('tax-calculator')->group(function () {
    Route::get('/', 'index')->name('individual.tax-calculator');
    Route::post('/calculate', 'calculate')->name('calculate.tax');
});
