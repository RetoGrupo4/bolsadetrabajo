<?php

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
    return view('welcome');
});

Route::get('ofertas','OfertasController@getOfertas');
Route::get('ofertas/show/{idOferta}','OfertasController@getShow');
Route::get('inscripciones/show/{idAlumno}','InscripcionesController@getShow');
Route::get('inscripciones/create/{idOferta}/{idAlumno}','InscripcionesController@getCreate');


/*
 *Rutas para acceder a las distintas acciones que podemos realizar con una empresa. 
 *A estas accioones solo pueden acceder los administradores "normales"
*/
Route::get('empresas','EmpresasController@getIndex');
Route::get('empresas/create', function() {
	return view('empresas.newempresa');
});
Route::post('empresas/create','EmpresasController@postCreate');
Route::get('empresas/show/{idEmpresa}','EmpresasController@getShow');
Route::delete('empresas/delete/{idEmpresa}','EmpresasController@deleteEmpresas');
Route::post('empresas/edit/{idEmpresa}','EmpresasController@getEdit');
Route::put('empresas/update/{idEmpresa}','EmpresasController@putUpdate');

/*
 * Rutas para acceder a las vistas y métedos para gestionar el CRUD de los administradores.
 */
Route::get('admin','AdminsController@getIndex');
Route::get('admin/create', function(){
	return view('administradores.newAdmin');
});
Route::get('admin/show/{idAdmin}','AdminsController@getShow');
Route::get('admin/edit/{idAdmin}','AdminsController@getEdit');
Route::put('admin/edit/{idAdmin}','AdminsController@putEdit');
Route::delete('admin/delete/{idAdmin}','AdminsController@deleteAdmin');