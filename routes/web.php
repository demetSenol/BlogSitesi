<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\YaziController;

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\YorumController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return redirect()->route('index');
// })->name('/');
// Route::view('index', 'index')->name('index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home',[HomeController::class,'index'])->
middleware('auth')->name('home');
route::get('post',[HomeController::class,'post'])->
middleware(['auth',1]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

Route::resource('yazi', YaziController::class);


 Route::resource('kategori', KategoriController::class);



 Route::resource('Yorum', YorumController::class);



// Route::prefix('Kategoriler')->namespace('Kategoriler')->name('Kategoriler.')->group(function () {
//         Route::get('/', [KategoriController::class, 'listeleme'])->name('listeleme');
//         Route::get('/ekle', [KategoriController::class, 'ekleme'])->name('ekleme');
//         Route::post('/ekle', [KategoriController::class, 'store'])->name('kategori.post');
//     });



