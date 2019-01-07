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

Route::get('empresa', function() {
	return view('Empresas.newempresa');
});
Route::post('empresas/create','EmpresasController@postCreate');

