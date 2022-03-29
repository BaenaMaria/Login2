<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Plataforma;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('usuarios', function(){
    $users=User::all()->toArray();

    return response()->json($users);
});

Route::get('/usuarios/{id}', function($id){
     return User::find($id);
 });

 Route::put('/usuarios/{id}', function(Request $request, $id){
  $usuario=User::findOrFail($id);
  $usuario->update($request->all());
  return $usuario;
 });

Route::delete('/usuarios/{id}', function($id){
    User::find($id)->delete();
    return 204;
});

 Route::get('plataformas', function(){
     $users=plataforma::all()->toArray();

     return response()->json($users);
 });//Mostrar plataforma API

 Route::get('/plataformas/{id}', function($id){
    return plataforma::find($id);
  });//Mostrar actualizar API

 Route::put('/plataformas/{id}', function(Request $request, $id){
   $plataforma=plataforma::findOrFail($id);
   $plataforma->update($request->all());
   return $plataforma;
});//actualizar API

Route::delete('/plataformas/{id}', function($id){
     plataforma::find($id)->delete();
     return 204;
});//Mostrar borrar API
