<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

});

Route::get('clientes/index',[ClienteController::class,'index']);

Route::get('/crear', [ClienteController::class, 'crear']);

Route::get('clientes/formulario', [ClienteController::class, 'formulario']);

Route::post('/crear', [ClienteController::class, 'crear']);