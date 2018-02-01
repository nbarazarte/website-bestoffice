<?php

	Route::get('/', [
		'uses' => 'HomeControllerIngles@index',
		'as' =>'homeIngles'
	]);	

	Route::put('Enviando', [
			'uses' => 'HomeControllerIngles@enviar',
			'as' =>'enviarIngles'
	]);

	Route::put('Enviando-CV', [
			'uses' => 'HomeControllerIngles@enviarTrabaja',
			'as' =>'enviarTrabajaIngles'
	]);	
		
	Route::get('/Mapa-del-Sitio', [
		'uses' => 'HomeControllerIngles@mapa',
		'as' =>'mapaIngles'
	]);

	Route::get('/Trabaja-con-Nosotros', [
		'uses' => 'HomeControllerIngles@trabaja',
		'as' =>'trabajaIngles'
	]);	

	Route::get('/Terms-of-Service', [
		'uses' => 'HomeControllerIngles@terminos',
		'as' =>'terminosIngles'
	]);	

	Route::get('/Políticas-de-Privacidad', [
		'uses' => 'HomeControllerIngles@politicas',
		'as' =>'politicasIngles'
	]);

	Route::get('/Download', [
		'uses' => 'HomeControllerIngles@descargar',
		'as' =>'descargarIngles'
	]);

	Route::get('/Descargar-{imagen}', [
		'uses' => 'HomeControllerIngles@descargarImagen',
		'as' =>'descargarImagenIngles'
	]);



	Route::get('/Contact-Us', [
		'uses' => 'HomeControllerIngles@contacto',
		'as' =>'contactoIngles'
	]);	

	Route::get('/site', [
		'uses' => 'HomeControllerIngles@site',
		'as' =>'siteIngles'
	]);

?>