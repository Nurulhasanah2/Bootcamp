<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\productcontroller;

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
Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/kategori', function () {
        return view('kategori');
    })->name('kategori');
    Route::get('/pesanan', function () {
        return view('pesanan');
    })->name('pesanan');
    Route::get('/produk', function () {
        return view('produk');
    })->name('produk');
    
    Route::group(['prefix' => 'components', 'as' => 'components.'], function() {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
    });
    Route::get("/kategori", [kategoricontroller::class, 'index'])->name('kategori.index');
    // Munculin Form Edit
Route::get("/kategori/{id}", [kategoricontroller::class, 'show'])->name('kategori.show');
//Buat Update
Route::put("/kategori/{id}", [kategoricontroller::class, 'update'])->name('kategori.update');
// Buat Delete
Route::delete("/kategori/{id}", [kategoricontroller::class, 'destroy'])->name('kategori.destroy');


Route::get("/produk", [productcontroller::class, 'index'])->name('produk.index');
    // Munculin Form Edit
Route::get("/produk/{id}", [productcontroller::class, 'show'])->name('produk.show');
//Buat Update
Route::put("/produk/{id}", [productcontroller::class, 'update'])->name('produk.update');
// Buat Delete
Route::delete("/produk/{id}", [productcontroller::class, 'destroy'])->name('produk.destroy');
});
