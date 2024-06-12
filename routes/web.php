<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FatherController;
use App\Http\Controllers\FatherTopicController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\KidTopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Articulos
Route::get('articulos/listar', [ArticleController::class, 'index'])->name('article.index');
Route::get('articulos/article', [ArticleController::class, 'create']);
Route::post('articulos/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('articulos/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::put('article/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('articulos/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
Route::get('article/{article}/editar', [ArticleController::class, 'edit'])->name('article.edit');

// Niños
Route::get('niños/listar', [KidController::class, 'index'])->name('niños.index');
Route::get('niños/create', [kidController::class, 'create']);
Route::post('niños/store', [kidController::class, 'store'])->name('niños.store');
Route::get('niños/{niños}', [kidController::class, 'show'])->name('niños.show');
Route::delete('niños/{niños}', [kidController::class, 'destroy'])->name('niños.destroy');

//Padres
Route::get('padres/listar', [FatherController::class, 'index'])->name('padres.index');
Route::get('padres/create', [FatherController::class, 'create']);
Route::post('padres/store', [FatherController::class, 'store'])->name('padres.store');
Route::get('padres/{padres}', [FatherController::class, 'show'])->name('padres.show');
Route::delete('padres/{padres}', [FatherController::class, 'destroy'])->name('padres.destroy');

//Padre_Tema
Route::get('padretema/listar', [FatherTopicController::class, 'index'])->name('padretema.index');
Route::get('padretema/create', [FatherTopicController::class, 'create']);
Route::post('padretema/store', [FatherTopicController::class, 'store'])->name('padretema.store');
Route::get('padretema/{padretema}', [FatherTopicController::class, 'show'])->name('padretema.show');
Route::delete('padretema/{padretema}', [FatherTopicController::class, 'destroy'])->name('padretema.destroy');

//Niño_Tema
Route::get('niñotema/listar', [KidTopicController::class, 'index'])->name('niñotema.index');
Route::get('niñotema/create', [kidTopicController::class, 'create']);
Route::post('niñotema/store', [kidTopicController::class, 'store'])->name('niñotema.store');
Route::get('niñotema/{niñotema}', [kidTopicController::class, 'show'])->name('niñotema.show');
Route::delete('niñotema/{niñotema}', [kidTopicController::class, 'destroy'])->name('niñotema.destroy');