<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('cadastro');
});

Route::get('usuarios/cadastro', [UserController::class, 'formulario']) -> name('user.cadastro');
Route::get('usuarios/store', [UserController::class, 'store']) -> name('user.store');
Route::get('usuarios', [UserController::class, 'lista']) ->name('user.lista');
Route::get('usuarios/detalhes', [UserController::class, 'detalhes']) ->name('user.detalhes');
Route::get('usuarios/del/{id}', [UserController::class, 'destroy']);