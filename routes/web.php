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
    
    // About Us Pages
    Route::prefix('about')->as('about.')->group(function () {
        Route::get('what-we-do',  'whatWeDo')->name('what-we-do');
        Route::get('vision-and-mission',  'visionAndMission')->name('vision-and-mission');
        Route::get('ethical-conduct',  'ethicalConduct')->name('ethical-conduct');

    });
});

Route::controller(TaxCalculatorController::class)->prefix('tax-calculator')->group(function () {
    Route::get('/', 'index')->name('individual.tax-calculator');
    Route::post('/calculate', 'calculate')->name('calculate.tax');
});
