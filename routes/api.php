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

// Modulo usuarios: 
Route::apiResource(name: '/roles', controller: 'App\Http\Controllers\Modulo_usuarios\API\RoleController');
Route::apiResource(name: '/permisos', controller: 'App\Http\Controllers\Modulo_usuarios\API\PermisoController');
Route::apiResource(name: '/usuarios', controller: 'App\Http\Controllers\Modulo_usuarios\API\UsuarioController');

// Modulo llaves: 
Route::apiResource(name: '/centros', controller: 'App\Http\Controllers\Modulo_llaves\API\CentroFormacionController');