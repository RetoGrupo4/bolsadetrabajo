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
    return view('auth.login');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');//Ruta para salir como usuario

Route::group(['routemiddleware'=>'auth'],function(){
	Route::get('ofertas/create/','OfertasController@create'); //Va a la pagina para crear una oferta nueva
	Route::post('ofertas/create','OfertasController@postCreate');
	Route::get('ofertas','OfertasController@getOfertas');
	Route::delete('ofertas/delete/{idOferta}','OfertasController@deleteOferta');
	Route::get('ofertas/show/{idOferta}','OfertasController@getShow'); 
	Route::get('inscripciones/show/{idAlumno}','InscripcionesController@getShow');
	Route::get('inscripciones/create/{idOferta}/{idAlumno}','InscripcionesController@getCreate');
	Route::get('ofertas/lista','OfertasController@getListaOfertas');


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

	/*Rutas alumno*/
	
	Route::get('alumno','alumnosController@index'); 
	Route::get('alumno/create','alumnosController@getCreate');
	Route::put('alumno/create','alumnosController@postCreate');
	Route::get('alumno/show/{idAlumno}','alumnosController@show');
	Route::post('alumno/edit/{idAlumno}','alumnosController@edit');
	Route::put('alumno/update/{idAlumno}','alumnosController@update');
	Route::delete('alumno/delete/{idAlumno}','alumnosController@delete');
	Auth::routes();

	/*Rutas para las acciones de formaciones*/
	Route::get('formacion','formacionesController@index'); 
	Route::get('formacion/create','formacionesController@getCreate');
	Route::post('formacion/create','formacionesController@postCreate');
	Route::get('formacion/show/{id_formaciones}','formacionesController@show');
	Route::delete('formacion/delete/{id_formaciones}','formacionesController@delete');
	Route::post('formacion/edit/{id_formaciones}','formacionesController@edit');
	Route::put('formacion/update/{id_formaciones}','formacionesController@update');

	/*Rutas para ciclos formativos*/
	Route::get('ciclo','CiclosController@getIndex'); /*Listado de todos los ciclos formativos*/
	Route::get('ciclo/show/{idCiclo}','CiclosController@getShow'); /*Muestra los datos de un ciclo*/
	Route::delete('ciclo/delete/{idCiclo}','CiclosController@deleteCiclo'); /*Borra el registro de un ciclo formativo*/
	Route::get('ciclo/edit/{idCiclo}', 'CiclosController@getEdit'); /*Muestra un formulario con los datos de un cicloc formativo*/
	Route::post('ciclo/edit/{idCiclo}','CiclosController@postUpdate');/*Coje los datos de un ciclo formativo del formulario de la ruta anterior y los actualiza*/
	Route::get('ciclo/create','CiclosController@getCreate');/*Rediirecciona al formulario donde se colen los datos para crear el registro de un nuevo ciclo formativo*/
	Route::post('ciclo/create','CiclosController@postCreate'); /*Redirecciona al metodo donde se crea un nuevo ciclo formativo*/
});


Route::get('/home', 'HomeController@index');