<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/band', [App\Http\Controllers\HomeController::class, 'Band'])->name('3akuntansi');
Route::get('/puisi', [App\Http\Controllers\HomeController::class, 'Puisi'])->name('3akuntansiap');
Route::get('/rap', [App\Http\Controllers\HomeController::class, 'Rap'])->name('4akuntansi');
Route::get('/pwh', [App\Http\Controllers\HomeController::class, 'PWH'])->name('4akuntansiapnon');
Route::get('/solo', [App\Http\Controllers\HomeController::class, 'Solo'])->name('4akuntansiap');
Route::get('/rekap', [App\Http\Controllers\HomeController::class, 'Rekap'])->name('4akuntansiap');

