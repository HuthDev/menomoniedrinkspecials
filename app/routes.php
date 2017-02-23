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

Route::get('/', 'HomeController@showWelcome');
Route::get('/google3085691852cee26d.html', function(){
	 return File::get(public_path() . '/google3085691852cee26d.html');
});
Route::get('/blog', 'MainController@indexBlog');
Route::get('/blog/{blogName}', 'MainController@loadBlog');
Route::get('/{dayID}', 'MainController@loadDay');
Route::get('/alex/test', 'MainController@loadAlex');

Route::get('/group/days', 'MainController@loadDayIndex');
Route::get('/group/bars', 'MainController@loadBarIndex');
Route::get('/bars/{barName}', 'MainController@loadIndivBar');

