<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manageImagesController;
use  App\Http\Controllers\categoryController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\directorateController;
use App\Http\Controllers\superadmin\usersController;


Route::get('/', MainController::class)->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('/imagess',manageImagesController::class)->middleware('auth');
Route::resource('/category',categoryController::class)->middleware('auth');
Route::resource('/blog',blogController::class)->middleware('auth');
Route::resource('directorates',directorateController::class)->middleware('auth');
Route::resource('user',usersController::class)->middleware(['auth','superAdmin']);

Route::controller(DashboardController::class)->prefix('admin')->as('admin.')->group(function () {
    Route::get('dashboard', 'index')->name('dashboard');
});

Route::get('/create',function(){
    return view('admin.blog.create');

});
