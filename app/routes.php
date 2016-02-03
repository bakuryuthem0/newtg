<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/','HomeController@getIndex');
Route::get('home','HomeController@getHome');

Route::get('servicios','HomeController@getServices');
Route::get('proyectos','HomeController@getProject');
Route::get('contacto','HomeController@getContact');
Route::get('contacto/enviar','HomeController@postContact');

Route::group(array('before' => 'no_auth'),function()
{
	Route::get('administrador/login','AdminController@getLogin');
	
	Route::group(array('before' =>'csrf'),function()
	{
		Route::post('administrador/login/enviar','AdminController@postLogin');
	});
});



Route::group(array('before' =>'auth'),function()
{
	Route::get('administrador','AdminController@getIndex');

	Route::get('administrador/usuario/perfil','AdminController@getUserProfile');

	Route::get('administrador/logout','AdminController@getLogout');
});