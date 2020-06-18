<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('/principal/index');
});

Route::get('/login', function () {
    return view('/principal/login');
});

Route::get('/registrarse', function () {
    return view('/principal/registrarse');
});

Route::get('/Admin_restaurante', function () {
    return view('/Administrador/index');
});

Route::get('/detalle_compra', function () {
    return view('/principal/detalle_compra');
});


/*Administrador alimentos*/

Route::get('/admin_alimentos','AlimentosController@alimentos_mostrar');

Route::post('/admin_alimentos_borrar','AlimentosController@eliminar');

Route::get('/agregar_alimento','AlimentosController@mostrar_insertar');

Route::post('/Admin_alimentos_nuevo','AlimentosController@insertar');

Route::post('/Admin_alimentos_editar','AlimentosController@actualizar');