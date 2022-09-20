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

Route::get("simples/funcao", "App\Http\Controllers\api\simplescontroller@funcao");

Route::post("simples/somar", "App\Http\Controllers\api\simplescontroller@somar");
Route::post("simples/subtrair", "App\Http\Controllers\api\simplescontroller@subtrair");
Route::post("simples/multiplicar", "App\Http\Controllers\api\simplescontroller@multiplicar");
Route::post("simples/dividir", "App\Http\Controllers\api\simplescontroller@dividir");
Route::post("simples/potencia", "App\Http\Controllers\api\simplescontroller@potencia");
Route::post("simples/raizquadrada", "App\Http\Controllers\api\simplescontroller@raizquadrada");
Route::post("simples/raizqualquer", "App\Http\Controllers\api\simplescontroller@raizqualquer");
