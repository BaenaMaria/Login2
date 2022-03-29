<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlataformaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use App\Models\plataforma;
use Illuminate\Http\Request;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');//Mostrar usuari
Route::get('/usuarios/{id}', [UserController::class, 'edit'])->name('usuarios.edit');//Mostrar vista de actualizar
Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');//Actualizar usuarios
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');//Eliminar usuarios

Route::get('/plataformas', [PlataformaController::class, 'index'])->name('plataformas.index');//Mostrar plataformas
Route::get('/plataformas/register', [PlataformaController::class, 'register'])->name('plataformas.register');//Mostrar registro de plataformas
Route::post('/plataformas/store', [PlataformaController::class, 'store'])->name('plataformas.store');//Crear plataformas
Route::get('/plataformas/{id}', [PlataformaController::class, 'edit'])->name('plataformas.edit');//Mostrar vista de actualizar
Route::put('/plataformas/{id}', [PlataformaController::class, 'update'])->name('plataformas.update');//Actualizar plataforma
Route::delete('/plataformas/{id}', [PlataformaController::class, 'destroy'])->name('plataformas.destroy');//Eliminar plataforma


