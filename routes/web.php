<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\frontend\PageHomeController;

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

Route::get('/',[PageHomeController::class,'anasayfa'])->name('anasayfa');

Route::get('/urunler',[PageController::class,'urunler'])->name('urunler');

Route::get('/erkek-giyim',[PageController::class,'urunler'])->name('erkekurunler');
Route::get('/kadin-giyim',[PageController::class,'urunler'])->name('kadinurunler');
Route::get('/cocuk-giyim',[PageController::class,'urunler'])->name('cocukurunler');
Route::get('/indirimliurunler',[PageController::class,'indirimliurunler'])->name('indirimliurunler');

Route::get('/urun/detay',[PageController::class,'urundetay'])->name('urundetay');

Route::get('/hakkimizda',[PageController::class,'hakkimizda'])->name('hakkimizda');

Route::get('/iletisim',[PageController::class,'iletisim'])->name('iletisim');

Route::get('/sepet',[PageController::class,'cart'])->name('sepet');
