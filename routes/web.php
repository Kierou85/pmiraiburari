<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\roleController;

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

// Route::get('/', function () {
//    return view('welcome');
// });


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('/admin', [roleController::class, 'admin'])->name('admin');
Route::get('/pengguna', [roleController::class, 'pengguna'])->name('pengguna');
Route::get('/peraturanorganisasi', [roleController::class, 'peraturanorganisasi'])->name('peraturanorganisasi');
Route::get('/juklakjuknis', [roleController::class, 'juklakjuknis'])->name('juklakjuknis');
Route::get('/pedoman', [roleController::class, 'pedoman'])->name('pedoman');
Route::get('/buku', [roleController::class, 'buku'])->name('buku');
Route::get('/materimateri', [roleController::class, 'materimateri'])->name('materimateri');
Route::get('/poster', [roleController::class, 'poster'])->name('poster');
Route::get('/leaflet', [roleController::class, 'leaflet'])->name('leaflet');
Route::get('/suratkeputusan', [roleController::class, 'suratkeputusan'])->name('suratkeputusan');
Route::get('/undangundang', [roleController::class, 'undangundang'])->name('undangundang');
Route::get('/adart', [roleController::class, 'adart'])->name('adart');


Route::get('article/{book}/{id?}', [roleController::class, 'article'])->name('article');
Route::get('download/{id}', [roleController::class, 'download'])->name('download'); // Tidak perlu diubah

Route::get('/create', [roleController::class, 'create'])->name('create');
Route::post('store/', [roleController::class, 'store'])->name('store');
Route::get('show/{book}', [roleController::class, 'show'])->name('show');
Route::get('edit/{book}', [roleController::class, 'edit'])->name('edit');
Route::put('edit/{book}', [roleController::class, 'update'])->name('update');
Route::delete('/{book}', [roleController::class, 'destroy'])->name('destroy');