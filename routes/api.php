<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('criar', [PostController::class,'store']);
Route::get('listar', [PostController::class, 'index']);
Route::delete('deletar/{id}', [PostController::class, 'destroy']);
Route::put('editar/{id}', [PostController::class, 'edit']);
Route::get('mostra/{id}', [PostController::class, 'show']);
//------------------------------------------------------------------------------------------------------------------
Route::post('criarc/{id}/comentario', [CommentController::class,'store']);
Route::get('listarc/{id}/comentario', [CommentController::class, 'index']);
Route::delete('deletarc/{id}/comentario/{id_comentario}', [CommentController::class, 'destroy']);
Route::put('editarc/{id}/comentario/{id_comentario}', [CommentController::class, 'edit']);
Route::get('mostrarc/{id}/comentario/{id_comentario}', [CommentController::class, 'show']);
