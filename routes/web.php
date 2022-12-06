<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\SitioController@hola');

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/registrado', function () {
    return view('mensaje');
});

Route::post('/formulario', function (Request $request) {
    dd($request->all());
});

Route::post('/informacion', 'App\Http\Controllers\PacientesController@guardar');