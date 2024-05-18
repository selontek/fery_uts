<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;

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

Route::get('/danadesa', [DesaController::class, 'index'])->middleware('auth');
Route::get('/danadesa/form/', [DesaController::class, 'create'])->middleware('auth');
Route::post('/danadesa/store/', [DesaController::class, 'store'])->middleware('auth');
Route::get('/danadesa/edit/{id}', [DesaController::class, 'edit'])->middleware('auth');
Route::put('/danadesa/{id}', [DesaController::class, 'update'])->middleware('auth');
Route::delete('/danadesa/{id}', [DesaController::class, 'destroy'])->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
