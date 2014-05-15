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
			Session::put('id', $currentPersonID);
			return $this->getDecideWhereToGo();
		}
		return 'failed';
	}
	public function getDecideWhereToGo(){
		$id = Session::get('id');
		$selfCount = PersonalityInventory::where('choserID', '=', $id)->where('chosenID', '=', $id)->count();
		$otherCount = PersonalityInventory::where('choserID', '=', $id)->where('chosenID', '!=', $id)->count();

		Session::put('choser', $id);

		if($selfCount < 1){
			Session::put('chosen', $id);
			return Redirect::action('InventoryController@getInventoryPage');
		}
		if($otherCount <= 3){
			return $this->getAnotherPerson();
		}
		return 'something else';

	}
	public function getAnotherPerson(){
		$person = Participant::orderBy(DB::raw('RAND()'))->get()->first()->name;
		Session::put('tempName', $person);
		return View::make('phasetwo.pickPerson', array('person' => $person));
	}
	public function postGetNewPerson(){
		return $this->getAnotherPerson();
	}
	public function postKnowThisPerson(){
		$name = Session::get('tempName');
		$otherID = Participant::where('name','=', $name)->first()->id;

		Session::put('chosen', $otherID);
		return Redirect::action('InventoryController@getInventoryPage');
	}
}