<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});


Route::prefix('/album')->controller(AlbumController::class)->middleware('auth')->name('album.')->group(function () {
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::get('/edit/{album}', 'edit')->name('edit');
    Route::get('/show/{album}', 'show')->name('show');
    Route::post('/update/{album}', 'update')->name('update');
    Route::post('/destroy/{album}', 'destroy')->name('destroy');
});
