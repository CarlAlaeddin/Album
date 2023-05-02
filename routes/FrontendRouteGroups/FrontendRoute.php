<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;



Route::prefix('/')->controller(FrontendController::class)->group(function (){
   Route::get('/','index')->name('index');
   Route::get('/edit/{album}','edit')->name('album.edit');
   Route::get('/show/{show}','show')->name('album.show');
});
