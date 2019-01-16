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
Route::get('ofertas/create/','OfertasController@create'); //Va a la pagina para crear una oferta nueva
Route::post('ofertas/create','OfertasController@postCreate');
Route::get('ofertas','OfertasController@getOfertas');
Route::delete('ofertas/delete/{idOferta}','OfertasController@deleteOferta');
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
Route::get('admin/create', 'AdminsController@getCreate');
Route::get('admin/show/{idAdmin}','AdminsController@getShow');
Route::get('admin/edit/{idAdmin}','AdminsController@getEdit');
Route::post('admin/edit/{idAdmin}','AdminsController@postUpdate');
Route::post('admin/create','AdminsController@postCreate');
Route::delete('admin/delete/{idAdmin}','AdminsController@deleteAdmin');

/*
 * Rutas para la creación de departamentos. Solo accederan a ella el superadministrador
 */

Route::get('departamento','DepartamentosController@getIndex'); //Ruta para mostrar la lista de todos los departamentos
Route::get('departamento/create','DepartamentosController@create'); //Ruta para mostrar el formulario donde se crean los departamentos
Route::get('departamento/show/{idDepartamento}','DepartamentosController@getShow'); //Ruta para mostrar los datos de un departamento
Route::post('departamento/create/','DepartamentosController@postCreate');
Route::post('departamento/edit/{idDepartamento}','DepartamentosController@postUpdate');
Route::delete('departamento/delete/{idDepartamento}','DepartamentosController@deleteDepartamento');
Route::get('departamento/edit/{idDepartamento}', 'DepartamentosController@getEdit');
