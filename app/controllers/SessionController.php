<?php

class SessionController extends BaseController{
	public function getLogin(){
		return View::make('session.login');
	}
	public function postLogin(){
		$key = Input::get('key');
		$count = Participant::where('key', '=', $key)->count();

		$currentPersonID = Participant::where('key', '=', $key)->first()->id;

		if($count == 1){
			Session::put('key', $key);
			Session::put('id', $currentPersonID);
			
			return Redirect::action('PhaseTwoController@getDecideWhereToGo');
		}
		return $this->getIndex();
	}
	public function getLogout(){}
}