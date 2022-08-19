<?php

use App\Http\Controllers\CargosController;
use App\Http\Controllers\Controller;
use App\Models\Cargos;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('CargosNodigasmentiritas',[App\Http\Controllers\CargosController::class,'index']);
Route::post('Cargos',[App\Http\Controllers\CargosController::class,'store']);
Route::get('Cargos/{id_cargo}',[App\Http\Controllers\CargosController::class,'show']);
Route::delete('Cargos/{id_cargo}',[App\Http\Controllers\CargosController::class,'destroy']);
// Route::put('Cargos',[App\Http\Controllers\CargosController::class,'update']);

