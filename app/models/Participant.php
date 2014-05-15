<?php

class Participant extends Eloquent{
	protected $table = 'participants';

	public function didDoSelfInventory($id){
		return PersonalityInventory::where('choser', '=' , $id)->where('chosen', '=', $id)->count();
	}
	public function getNumberOfOtherInventories($id){
		return PersonalityInventory::where('choser', '=' , $id)->where('chosen', '!=', $id)->count();
	}
}

?>
