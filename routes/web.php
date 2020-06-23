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

Route::post('/Admin_alimentos_nuevo','AlimentosController@insertar')->name('Admin_alimentos_nuevo');


Route::get('/actualizar_alimento','AlimentosController@mostrar_actualizar');
Route::post('/Admin_alimentos_editar','AlimentosController@actualizar')->name('Admin_alimentos_editar');

/*Administrador categoria*/
Route::get('/admin_categoria','CategoriaController@categorias_mostrar');
Route::post('/admin_categoria_borrar','CategoriaController@eliminar');
Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');
Route::post('/Admin_categoria_editar','CategoriaController@actualizar');

/*Administrador detalle venta*/

Route::get('/admin_detalle_venta','Detalle_ventaController@detalle_ventas_mostrar');

Route::post('/admin_detalle_venta_eliminar','Detalle_ventaController@eliminar');

Route::post('/Admin_detalle_venta_insertar','Detalle_ventaController@insertar');

Route::post('/Admin_detalle_venta_actualizar','Detalle_ventaController@actualizar');

/*Administrador usuario*/

Route::get('/admin_usuario','UsuarioController@usuarios_mostrar');

Route::post('/admin_usuario_eliminar','UsuarioController@eliminar');

Route::get('/agregar_usuario','UsuarioController@mostrar_insertar');
//Route::post('/Admin_alimentos_nuevo','UsuarioController@insertar');
Route::post('/Admin_usuario_nuevo','UsuarioController@insertar')->name('Admin_usuario_nuevo');


Route::get('/actualizar_usuario','UsuarioController@mostrar_actualizar');
Route::post('/Admin_usuario_actualizar','UsuarioController@actualizar')->name('Admin_usuario_actualizar');

/*Administrador Metodo de pago*/

Route::get('/admin_metodo_de_pago','Metodo_pagoController@metodo_pago_mostrar');

Route::post('/admin_metodo_de_pago_eliminar','Metodo_pagoController@eliminar');

Route::post('/Admin_metodo_de_pago_insertar','Metodo_pagoController@insertar');


Route::post('/Admin_metodo_de_pago_actualizar','Metodo_pagoController@actualizar');

/*Administrador mesa*/

Route::get('/admin_mesa','MesaController@mesa_mostrar');

Route::post('/admin_mesa_eliminar','MesaController@eliminar');

Route::post('/Admin_mesa_insertar','MesaController@insertar');

Route::post('/Admin_mesa_actualizar','MesaController@actualizar');

/*Administrador alimento- ingrediente*/

Route::get('/admin_ingrediente_alimento/{alimento?}','Ingrediente_alimentoController@ingredientes');

Route::post('/admin_ingrediente_alimento_eliminar','Ingrediente_alimentoController@eliminar');

Route::post('/Admin_ingrediente_alimento_insertar','Ingrediente_alimentoController@insertar');

/*Administrador imagenes de muestra*/

Route::get('/admin_imagenes_muestra/{alimento?}','Imagenes_muestraController@imagenes_de_muestra_mostrar');

Route::post('/admin_imagenes_muestra_eliminar','Imagenes_muestraController@eliminar')->name('admin_imagenes_muestra_eliminar');

Route::post('/Admin_imagenes_muestra_insertar','Imagenes_muestraController@insertar')->name('Admin_imagenes_muestra_insertar');

/*Administrador direcciones*/
Route::get('/admin_direcciones/{direccion?}','DireccionController@direccion_mostrar');

Route::post('/admin_direccioneseliminar','DireccionController@eliminar')->name('admin_direccioneseliminar');

Route::post('/admin_direccionesingresar','DireccionController@insertar')->name('admin_direccionesingresar');

Route::post('/admin_direccionesactualizar','DireccionController@actualizar')->name('admin_direccionesactualizar');
