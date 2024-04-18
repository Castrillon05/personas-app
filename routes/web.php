<?php

use App\Http\Controllers\ComunaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/comunas', [ComunaController::class, 'index'])->name('comunas.index');
Route::get('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class, 'store'])->name('comunas.create');
Route::get('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class, 'edit'])->name('comunas.edit');

Route::get('/departamentos' , [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos' , [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create' , [DepartamentoController::class, 'create'])->name('departamentos.create');


