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
    return redirect()->route('index');
})->name('/');

Route::view('index', 'index')->name('index');

Route::prefix('Kategoriler')->group(function () {
    Route::view('Listeleme', 'Kategoriler.Listeleme')->name('Listeleme');
});

Route::prefix('Yazi')->group(function () {
    Route::view('create', 'Yazi.create')->name('create');
});
