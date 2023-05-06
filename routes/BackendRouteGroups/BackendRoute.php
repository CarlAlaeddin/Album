<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


#_______________________________________ Auth
Auth::routes(['verify' => true]);


//______ set middleware verified account
Route::prefix('/')
    ->middleware(['auth', 'verified'])
    ->group(function () {
        #_______________________________________ Home
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
            ->name('home');

        #_______________________________________ Album Store
        Route::post('/album-store', [AlbumController::class, 'store'])
            ->name('album.store');


        Route::prefix('/admin-panel')
            ->controller(AdminController::class)
            ->name('admin-panel.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
            });
    });
