<?php

use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\UserController;
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
    return redirect(route('login'));
});

require __DIR__ . '/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/kk', [KartuKeluargaController::class, 'index'])->name('kk-list');
    Route::get('/ctz', [PendudukController::class, 'index'])->name('ctz-list');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/kk-create', [KartuKeluargaController::class, 'create'])->name('kk-create');
    Route::post('/kk-create', [KartuKeluargaController::class, 'store'])->name('kk-store');
    Route::get('/kk-edit/{kartuKeluarga}', [KartuKeluargaController::class, 'edit'])->name('kk-edit');
    Route::post('/kk-edit/{kartuKeluarga}', [KartuKeluargaController::class, 'update'])->name('kk-update');
    Route::get('/kk-delete/{kartuKeluarga}', [KartuKeluargaController::class, 'destroy'])->name('kk-delete');

    Route::get('/ctz-create', [PendudukController::class, 'create'])->name('ctz-create');
    Route::post('/ctz-store', [PendudukController::class, 'store'])->name('ctz-store');

    Route::get('/user', [UserController::class, 'index'])->name('user-list');
    Route::get('/user/create', [UserController::class, 'create'])->name('user-create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user-store');
});
