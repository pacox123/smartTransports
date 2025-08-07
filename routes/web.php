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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/quienSomos', [App\Http\Controllers\HomeController::class, 'index2'])->name('us');
Route::get('/viajes', [App\Http\Controllers\HomeController::class, 'trips'])->name('trips');
Route::get('/contactanos', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

