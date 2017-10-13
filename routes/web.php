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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' =>'home'
]);	

Route::put('Enviando', [
		'uses' => 'HomeController@enviar',
		'as' =>'enviar'
]);

Route::put('Enviando-CV', [
		'uses' => 'HomeController@enviarTrabaja',
		'as' =>'enviarTrabaja'
]);	
	
Route::get('/Mapa-del-Sitio', [
	'uses' => 'HomeController@mapa',
	'as' =>'mapa'
]);

Route::get('/Trabaja-con-Nosotros', [
	'uses' => 'HomeController@trabaja',
	'as' =>'trabaja'
]);	

Route::get('/Términos-del-Servicio', [
	'uses' => 'HomeController@terminos',
	'as' =>'terminos'
]);	

Route::get('/Políticas-de-Privacidad', [
	'uses' => 'HomeController@politicas',
	'as' =>'politicas'
]);


Route::get('/Descargar', [
	'uses' => 'HomeController@descargar',
	'as' =>'descargar'
]);