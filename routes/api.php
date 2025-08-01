<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('proprietario', 'App\Http\Controllers\ProprietarioController');





//AULA 30/07
// Route::get('/clientes', function(){
//     return [
//         ['nome' => 'Jussara', 'email' => 'jussara@email.com'],
//         ['nome' => 'Carlos', 'email' => 'carlos@email.com'],
//         ['nome' => 'Mariana', 'email' => 'mariana@email.com'],
//         ['nome' => 'Pedro', 'email' => 'pedro@email.com'],
//         ['nome' => 'Ana', 'email' => 'ana@email.com'],
//         ['nome' => 'Lucas', 'email' => 'lucas@email.com'],
//         ['nome' => 'Fernanda', 'email' => 'fernanda@email.com'],
//         ['nome' => 'Rafael', 'email' => 'rafael@email.com'],
//         ['nome' => 'Beatriz', 'email' => 'beatriz@email.com'],
//         ['nome' => 'Gustavo', 'email' => 'gustavo@email.com'],
//         ['nome' => 'Camila', 'email' => 'camila@email.com'],"
//     ];
// });
