<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NiveauxController;
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


Route::get('', [IndexController::class, 'index']);
Route::get('contact', [IndexController::class, 'contact']);


Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('/etudiant/create', [EtudiantController::class, 'create'])->name('etudiant.create');


Route::get('/niveau', [NiveauxController::class, 'index'])->name('niveau.index');
Route::get('/niveau/create', [NiveauxController::class, 'create'])->name('niveau.create');

Route::post('/niveau/store', [NiveauxController::class, 'store'])->name('niveau.store');

Route::get('/niveau/edit/{niveau}', [NiveauxController::class, 'edit'])->name('niveau.edit');
Route::get('/niveau/delete/{niveau}', [NiveauxController::class, 'destroy'])->name('niveau.delete');

Route::post('/niveau/{niveau}/update', [NiveauxController::class, 'update'])->name('niveau.update');

