<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\ClienteController;

Route::get('clientes',
   [ClienteController::class,'apiIndex']);

Route::post('clientes',
   [ClienteController::class,'apiStore']);

Route::put('clientes/{c}',
   [ClienteController::class,'apiUpdate']);

Route::delete('clientes/{id}',
   [ClienteController::class,'apiDelete']);

Route::get('clientes/{c}',
   [ClienteController::class,'apiShow']);