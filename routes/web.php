<?php

use App\Http\Controllers\DiplomadoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('diplomados',DiplomadoController::class);
Route::get('diplomados/{diplomado}/pdf', [DiplomadoController::class, 'resolucion'])->name('diplomados.resolucion');