<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->controller(FrontendController::class)->group(function (){
   Route::get('/','index')->name('index');

});


Route::prefix('/album')->controller(AlbumController::class)->name('album.')->group(function (){
    Route::get('/edit/{album}','edit')->name('edit');
    Route::get('/show/{album}','show')->name('show');
});
