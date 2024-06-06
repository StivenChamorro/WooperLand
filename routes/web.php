<?php

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
