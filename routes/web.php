<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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


Route::resource('pegawai', PegawaiController::class);
Route::get('/', [PegawaiController::class, 'index'])->name('index');
Route::get('/create', [PegawaiController::class, 'create'])->name('create');
Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('edit');
Route::delete('/delete/{id}', [PegawaiController::class, 'destroy'])->name('delete');