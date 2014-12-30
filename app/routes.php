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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('home', function()
{
	return View::make('index');
});

Route::post('home',function()

{
	$input = Input::get('age');

	
	return $input;
});

Route::get('child', function()
{
	return View::make('childform');
});

Route::post('child', function()

{
	$input = Input::all();

	
	return $input;
});