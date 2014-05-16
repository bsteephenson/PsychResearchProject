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


Route::controller('participants', 'ParticipantsController');
Route::controller('compliance', 'ComplianceController');
Route::controller('inventory', 'InventoryController');
Route::controller('phasetwo', 'PhaseTwoController');
Route::controller('session', 'SessionController');
