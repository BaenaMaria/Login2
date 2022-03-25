<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();

Route::get('/usuarios', [UserController::class, 'index']);//Mostrar usuarios
Route::put('/usuarios/{id}', [UserController::class, 'update']);//Actualizar usuarios
Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);//Eliminar usuarios

