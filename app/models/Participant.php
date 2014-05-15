<?php

class Participant extends Eloquent{
	protected $table = 'participants';

	public didDoSelfInventory($id){
		return PersonalityInventory::where('choser', '=' , $id)->where('chosen', '=', $id)->count();
	}
	public getNumberOfOtherInventories($id){
		return PersonalityInventory::where('choser', '=' , $id)->where('chosen', '!=', $id)->count();
	}
}

?>
