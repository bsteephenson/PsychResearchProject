<?php

class ParticipantsController extends BaseController{
	public function getIndex(){
		return View::make('participants.index', array('list' => Participant::all()));
	}

	public function getAllParticipants(){
		$allParticipants = Participant::all();

		// $newParticipant = new Participant;
		// $newParticipant->name = "Bob S";
		// $newParticipant->key = "adsfa8dfas8f";
		// $newParticipant->save();

		return Response::json($allParticipants);

	}

	// public function postCreateParticipant(){
	// 	$name = Input::get('name');
	// 	$key = Input::get('key');
	//
	// 	$newParticipant = new Participant;
	// 	$newParticipant->name = $name;
	// 	$newParticipant->key = $key;
	// 	$newParticipant->save();
	// }
public function getEdit(){}
public function postEdit(){}

public function getCreate(){}
public function postCreate(){}

public function getDelete(){}
public function postDelete(){}
}

?>
