<?php

class PhaseTwoController extends BaseController{
	public function getIndex(){
		return View::make('phasetwo.login');
	}
	public function postLogin(){
		$key = Input::get('key');
		$count = Participant::where('key', '=', $key)->count();

		$currentPersonID = Participant::where('key', '=', $key)->first()->id;

		if($count == 1){
			Session::put('key', $key);
			Session::put('chosen', $currentPersonID);
			return Redirect::action('InventoryController@getInventoryPage');
		}
		return 'failed';
	}
}