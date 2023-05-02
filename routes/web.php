<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 *__________________________Frontend Route
 */
Auth::routes();

require_once 'FrontendRouteGroups/FrontendRoute.php';


/**
 *__________________________Backend Route
 */
Route::get('/home', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');


