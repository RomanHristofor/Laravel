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
Route::controller('/{id?}', 'BaseController'); 

/*Route::get('user/{id}', function($id) 
{
	return 'user','$id';
})->where ;*/

/*Route::post('/foo/', function() //можем подк шаблончик и контроллер . вместо post можно использовать any(любой)
{
	return 'Hello';
});*/

/*Route::get('/foo', function() //можем подк шаблончик и контроллер
{
	return 'Hello';
});*/

Route::get('/', function()
{
	return View::make('hello');
});
