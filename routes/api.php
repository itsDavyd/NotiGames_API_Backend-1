<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CategoriaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
