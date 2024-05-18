<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\KerjaController;

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

// Manajemen Dana Desa
Route::get('/danadesa', [DesaController::class, 'index'])->middleware('auth');
Route::get('/danadesa/form/', [DesaController::class, 'create'])->middleware('auth');
Route::post('/danadesa/store/', [DesaController::class, 'store'])->middleware('auth');
Route::get('/danadesa/edit/{id}', [DesaController::class, 'edit'])->middleware('auth');
Route::put('/danadesa/{id}', [DesaController::class, 'update'])->middleware('auth');
Route::delete('/danadesa/{id}', [DesaController::class, 'destroy'])->middleware('auth');

// Manajemen Belanja
Route::get('/belanja', [BelanjaController::class, 'index'])->middleware('auth');
Route::get('/belanja/form/', [BelanjaController::class, 'create'])->middleware('auth');
Route::post('/belanja/store/', [BelanjaController::class, 'store'])->middleware('auth');
Route::get('/belanja/edit/{id}', [BelanjaController::class, 'edit'])->middleware('auth');
Route::put('/belanja/{id}', [BelanjaController::class, 'update'])->middleware('auth');
Route::delete('/belanja/{id}', [BelanjaController::class, 'destroy'])->middleware('auth');

// Manajemen Belanja
Route::get('/kerja', [KerjaController::class, 'index'])->middleware('auth');
Route::get('/kerja/form/', [KerjaController::class, 'create'])->middleware('auth');
Route::post('/kerja/store/', [KerjaController::class, 'store'])->middleware('auth');
Route::get('/kerja/edit/{id}', [KerjaController::class, 'edit'])->middleware('auth');
Route::put('/kerja/{id}', [KerjaController::class, 'update'])->middleware('auth');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
