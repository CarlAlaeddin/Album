<?php 

use App\Http\Controllers\Admin\User\AdminUserController;
use Illuminate\Support\Facades\Route;


Route::prefix('/admin')->middleware(['auth'])->group(function(){
    
    // __________________________________ Users
    Route::prefix('/user')->controller(AdminUserController::class)->name('admin.user.')->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::post('/update/{user}','update')->name('update');
        Route::post('/destroy/{user}','destroy')->name('destroy');
        Route::get('/edit/{user}','edit')->name('edit');
    });


});