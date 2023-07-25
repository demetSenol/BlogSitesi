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
    Route::view('Ekleme', 'Kategoriler.Ekleme')->name('Ekleme');
});

Route::prefix('Yazi')->group(function () {
    Route::view('listele', 'Yazi.listele')->name('listele');
    Route::view('Onay', 'Yazi.Onay')->name('Onay');
    Route::view('create', 'Yazi.create')->name('create');
     Route::view('details', 'Yazi.details')->name('details');

});

Route::prefix('Yorumlar')->group(function () {
    Route::view('Onayli', 'Yorumlar.Onayli')->name('Onayli');
    Route::view('Onaysiz', 'Yorumlar.Onaysiz')->name('Onaysiz');
});

Route::prefix('Uyeler')->group(function () {
    Route::view('uyeListesi', 'Uyeler.uyeListesi')->name('uyeListesi');
});

