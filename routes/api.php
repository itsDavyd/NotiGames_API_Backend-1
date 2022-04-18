<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ComentarioController;
use App\Http\Controllers\API\EstadisticaRlController;
use App\Http\Controllers\API\EstadisticaCsgoController;
use App\Http\Controllers\API\EstadisticaLolController;

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

Route::prefix('categoria')->group(function () {
    Route::get('/',[ CategoriaController::class, 'getAll']);
    Route::post('/',[ CategoriaController::class, 'create']);
    Route::delete('/{id}',[ CategoriaController::class, 'delete']);
    Route::get('/{id}',[ CategoriaController::class, 'get']);
    Route::put('/{id}',[ CategoriaController::class, 'update']);
});

Route::prefix('post')->group(function () {
    Route::get('/',[ PostController::class, 'getAll']);
    Route::post('/',[ PostController::class, 'create']);
    Route::delete('/{id}',[ PostController::class, 'delete']);
    Route::get('/{id}',[ PostController::class, 'get']);
    Route::put('/{id}',[ PostController::class, 'update']);
});

Route::prefix('user')->group(function () {
    Route::get('/',[ UserController::class, 'getAll']);
    Route::post('/',[ UserController::class, 'create']);
    Route::delete('/{id}',[ UserController::class, 'delete']);
    Route::get('/{id}',[ UserController::class, 'get']);
    Route::put('/{id}',[ UserController::class, 'update']);
});

Route::prefix('comentario')->group(function () {
    Route::get('/',[ ComentarioController::class, 'getAll']);
    Route::post('/',[ ComentarioController::class, 'create']);
    Route::delete('/{id}',[ ComentarioController::class, 'delete']);
    Route::get('/{id}',[ ComentarioController::class, 'get']);
    Route::put('/{id}',[ ComentarioController::class, 'update']);
});

Route::prefix('estadisticaLol')->group(function () {
    Route::get('/',[ EstadisticaLolController::class, 'getAll']);
    Route::post('/',[ EstadisticaLolController::class, 'create']);
    Route::delete('/{id}',[ EstadisticaLolController::class, 'delete']);
    Route::get('/{id}',[ EstadisticaLolController::class, 'get']);
    Route::put('/{id}',[ EstadisticaLolController::class, 'update']);
});

Route::prefix('estadisticaRl')->group(function () {
    Route::get('/',[ EstadisticaRlController::class, 'getAll']);
    Route::post('/',[ EstadisticaRlController::class, 'create']);
    Route::delete('/{id}',[ EstadisticaRlController::class, 'delete']);
    Route::get('/{id}',[ EstadisticaRlController::class, 'get']);
    Route::put('/{id}',[ EstadisticaRlController::class, 'update']);
});

Route::prefix('estadisticaCsgo')->group(function () {
    Route::get('/',[ EstadisticaCsgoController::class, 'getAll']);
    Route::post('/',[ EstadisticaCsgoController::class, 'create']);
    Route::delete('/{id}',[ EstadisticaCsgoController::class, 'delete']);
    Route::get('/{id}',[ EstadisticaCsgoController::class, 'get']);
    Route::put('/{id}',[ EstadisticaCsgoController::class, 'update']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
