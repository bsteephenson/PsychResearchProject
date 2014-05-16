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
			
			return $this->getDecideWhichActionToGoTo();
		}
		return $this->getLogin();
	}
	public function getLogout(){
		Session::forget('key');
		return Redirect::action('SessionController@getLogin');

	}

	//decided whether to send a logged in user to the compliance page or to the phaseTwo things
	public function getDecideWhichActionToGoTo(){
		$currentStage = 1;
		if($currentStage == 1){
			return Redirect::action('ComplianceController@getDetails');
		}
		else if($currentStage == 2){
			//stage two surveys
			return Redirect::action('PhaseTwoController@getDecideWhereToGo');
		}
	}
}