<?php
namespace App\Http\Controllers;
use App\Http\Controllers\ArticleController;
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

Route::get('logros/listar', [AchiviementController::class, 'index'])->name('achiviement.index');
Route::get('logros/achievement', [AchiviementController::class, 'create']);
Route::post('logros/store', [AchiviementController::class, 'store'])->name('achiviement.store');
Route::get('logros/{achievement}', [AchiviementController::class, 'show'])->name('logro.show');
Route::put('logros/{logro}', [AchiviementController::class, 'update'])->name('achiviement.update');
Route::delete('logros/{achievement}', [AchiviementController::class, 'destroy'])->name('logro.destroy');
Route::get('logros/{logros}/editar', [AchiviementController::class, 'edit'])->name('achiviement.edit');

Route::get('informes/listar', [ReportController::class, 'index'])->name('report.index');
Route::get('informes/report', [ReportController::class, 'create']);
Route::post('informes/store', [ReportController::class, 'store'])->name('report.store');
Route::get('informes/{report}', [ReportController::class, 'show'])->name('informe.show');
Route::put('logros/{logro}', [ReportController::class, 'update'])->name('informe.update');
Route::delete('informes/{report}', [ReportController::class, 'destroy'])->name('informe.destroy');
Route::get('logros/{logros}/editar', [ReportController::class, 'edit'])->name('informe.edit');

Route::get('niveles/listar', [LevelController::class, 'index'])->name('level.index');
Route::get('niveles/levels', [LevelController::class, 'create']);
Route::post('niveles/store', [LevelController::class, 'store'])->name('level.store');
Route::get('niveles/{achievement}', [LevelController::class, 'show'])->name('nivel.show');
Route::put('logros/{logro}', [LevelController::class, 'update'])->name('level.update');
Route::delete('nivles/{achievement}', [LevelController::class, 'destroy'])->name('nivel.destroy');
Route::get('logros/{logros}/editar', [LevelController::class, 'edit'])->name('nivel.edit');