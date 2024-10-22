<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilmesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/filmes', [FilmesController::class, 'index'])->name('filmes.index');
Route::get('/filmes/create', [FilmesController::class, 'create'])->name('filmes.create');
Route::post('/filmes', [FilmesController::class, 'store'])->name('filmes.store');
Route::get('/filmes/{filme}', [FilmesController::class, 'show'])->name('filmes.show');
Route::get('/filmes/{filme}/edit', [FilmesController::class, 'edit'])->name('filmes.edit');
Route::put('/filmes/{filme}', [FilmesController::class, 'update'])->name('filmes.update');
Route::delete('/filmes/{filme}', [FilmesController::class, 'destroy'])->name('filmes.destroy');