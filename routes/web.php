<?php

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
// routes/web.php

use App\Http\Controllers\LogHarianController;

Route::get('/log-harian', [LogHarianController::class, 'index'])->name('log-harian.index');
Route::get('/log-harian/create', [LogHarianController::class, 'create'])->name('log-harian.create');
Route::post('/log-harian/store', [LogHarianController::class, 'store'])->name('log-harian.store');
Route::get('/log-harian/{logHarian}/verify', [LogHarianController::class, 'verify'])->name('log-harian.verify');
Route::put('/log-harian/{logHarian}/approve', [LogHarianController::class, 'approve'])->name('log-harian.approve');
Route::put('/log-harian/{logHarian}/reject', [LogHarianController::class, 'reject'])->name('log-harian.reject');


use App\Http\Controllers\ProvinsiController;

// Route untuk HTML
Route::view('/provinsi', 'provinsi');
Route::view('/provinsi/create', 'provinsi.create');
Route::view('/provinsi/store', 'provinsi.store');

// Route::get('/provinsi', [ProvinsiController::class, 'index']);
// Route::get('/provinsi/{id}', [ProvinsiController::class, 'show']);
// Route::post('/provinsi', [ProvinsiController::class, 'store']);
// Route::put('/provinsi/{id}', [ProvinsiController::class, 'update']);
// Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy']);



// Route untuk API
Route::get('/api/provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');
Route::get('/api/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
Route::post('/api/provinsi/store', [ProvinsiController::class, 'store'])->name('provinsi.store');
Route::get('/api/provinsi/{id}', [ProvinsiController::class, 'show']);
Route::post('/api/provinsi', [ProvinsiController::class, 'store']);
Route::put('/api/provinsi/{id}', [ProvinsiController::class, 'update']);
Route::delete('/api/provinsi/{id}', [ProvinsiController::class, 'destroy']);



use App\Http\Controllers\KinerjaController;

Route::get('/show-predikat-kinerja', [KinerjaController::class, 'showPredikatKinerja']);

use App\Http\Controllers\HelloWorldController;

Route::get('/helloworld/{n}', [HelloWorldController::class, 'helloworld']);


