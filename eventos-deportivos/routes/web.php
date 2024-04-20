<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventosController;
use App\Http\Controllers\ParticipantesController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/participantes', [ParticipantesController::class, 'index'])->name('participantes');
Route::get('/participantes/editar', [ParticipantesController::class, 'edit'])->name('participantes.editar');

Route::get('/eventos', [EventosController::class, 'index'])->name('eventos');
Route::get('/eventos/editar', [EventosController::class, 'edit'])->name('eventos.editar');

Route::get('/equipos', [EquiposController::class, 'index'])->name('equipos');
Route::get('/equipos/editar', [EquiposController::class, 'edit'])->name('equipos.editar');
