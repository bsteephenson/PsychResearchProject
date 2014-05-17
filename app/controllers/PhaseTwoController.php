<?php

class PhaseTwoController extends BaseController{

	public function getDecideWhereToGo(){
		$id = Session::get('id');
		$selfCount = PersonalityInventory::where('choserID', '=', $id)->where('chosenID', '=', $id)->count();
		$otherCount = PersonalityInventory::where('choserID', '=', $id)->where('chosenID', '!=', $id)->count();

		Session::put('choser', $id);
		

		if($selfCount < 1){
			Session::put('chosen', $id);
			Session::put('step', 1);
			Session::flash('cameFromRedirect', true);
			return View::make('phasetwo.instructions', array('numberOfSteps'=>9, 'stepNumber'=>1));

		}
		if($otherCount < 3){
			Session::put('step', (2*$otherCount) + 3);
			return Redirect::action('PhaseTwoController@getAnotherPerson');
		}
		if($otherCount >= 3){
			return Redirect::action('PhaseTwoController@getSuccess');
		}

	}
	public function getAnotherPerson(){
		$alreadyPicked = true;
		while($alreadyPicked){
			$person = Participant::orderBy(DB::raw('RAND()'))->get()->first();
			if(PersonalityInventory::where('chosenID','=', $person->id)->where('choserID', '=', Session::get('choser'))->count() < 1){
				$alreadyPicked = 0;
			}
		}
		$personName = $person->name;
		Session::put('tempName', $personName);
		return View::make('phasetwo.pickPerson', array('person' => $personName, 'numberOfSteps' => 9, 'stepNumber' => Session::get('step')));
	}
	public function postGetNewPerson(){
		return Redirect::action('PhaseTwoController@getAnotherPerson');
	}
	public function postKnowThisPerson(){
		$name = Session::get('tempName');
		$otherID = Participant::where('name','=', $name)->first()->id;

		Session::put('chosen', $otherID);
		Session::flash('cameFromRedirect', true);
		return Redirect::action('InventoryController@getInventoryPage');
	}
	public function getSuccess(){
		return View::make('phasetwo.success', ['numberOfSteps' => 9, 'stepNumber' => 9]);
	}
}