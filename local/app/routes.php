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
/*Route::controller('/{id?}', 'BaseController');

Route::get('user/{id}', function($id) 
{
	return 'user'.$id;
})
->where('id', '[0-9]+');

Route::get('user', array('before' => 'old', function () {
  return 'Вам больше 200 лет!';
}));

Route::get('/foo', function() 	//можем подк шаблончик и контроллер . вместо post можно использовать any(любой)
{
	return 'Hello';
});*/
Route::get('/{id?}',[
    'as'=>'main',
    'uses'=>'StaticController@getIndex',
    ]);


/*Route::get('/', function()
{
	return View::make('hello');
});
*/