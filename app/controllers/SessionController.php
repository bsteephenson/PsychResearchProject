<?php

class SessionController extends BaseController{
	public function getLogin(){
		return View::make('session.login');
	}
	public function postLogin(){
		$key = Input::get('key');
		$count = Participant::where('key', '=', $key)->count();


		if($count == 1){
		$currentPersonID = Participant::where('key', '=', $key)->first()->id;

			Session::put('key', $key);
			Session::put('id', $currentPersonID);
			
			return $this->getDecideWhichActionToGoTo();
		}
		else{
			return $this->getLogin();			
		}
	}
	public function getLogout(){
		Session::forget('key');
		return Redirect::action('SessionController@getLogin');

	}

	//decided whether to send a logged in user to the compliance page or to the phaseTwo things
	public function getDecideWhichActionToGoTo(){
		if(!Session::has('key')){
			return Redirect::action('SessionController@getLogin');
		}
		$currentStage = 2;
		if($currentStage == 1){
			return Redirect::action('ComplianceController@getDetails');
		}
		else if($currentStage == 2){
			//stage two surveys
			return Redirect::action('PhaseTwoController@getDecideWhereToGo');
		}
	}
}