<?php


use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


#_______________________________________ Auth
Auth::routes(['verify' => true]);


//______ set middleware verified account
Route::prefix('/')->middleware('verified')->group(function (){

    #_______________________________________ Home
    Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

    #_______________________________________ Album Store
    Route::post('/album-store',[AlbumController::class,'store'])->name('album.store');

});
