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


Route::group(['prefix' => '/en/'], function () {
	
	include('rutasIngles.php');

});

	Route::get('/Paint-with-Best-Office', [
		'uses' => 'HomeControllerIngles@colorear',
		'as' =>'colorearIngles'
	]);	



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

Route::get('/Descargar-{imagen}', [
	'uses' => 'HomeController@descargarImagen',
	'as' =>'descargarImagen'
]);

Route::get('/Colorear-con-BestOffice', [
	'uses' => 'HomeController@colorear',
	'as' =>'colorear'
]);	

Route::get('/Contáctanos', [
	'uses' => 'HomeController@contacto',
	'as' =>'contacto'
]);	

Route::get('/site', [
	'uses' => 'HomeController@site',
	'as' =>'site'
]);
