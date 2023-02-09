<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DvdController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
// })
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create')->middleware('auth');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/listdvd', [App\Http\Controllers\HomeController::class, 'listdvd'])->name('listdvd');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::resource('order', DvdController::class)->middleware(['auth', 'roleAdmin']);
Route::resource('user', UserController::class);
