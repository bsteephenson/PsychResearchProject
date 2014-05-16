<?php

class ParticipantsController extends BaseController{
	public function getIndex(){
		return View::make('participants.index', array('list' => Participant::all()));
	}

	// public function getAllParticipants(){
	// 	$allParticipants = Participant::all();
	//
	// 	// $newParticipant = new Participant;
	// 	// $newParticipant->name = "Bob S";
	// 	// $newParticipant->key = "adsfa8dfas8f";
	// 	// $newParticipant->save();
	//
	// 	return Response::json($allParticipants);
	//
	// }

	// public function postCreateParticipant(){
	// 	$name = Input::get('name');
	// 	$key = Input::get('key');
	//
	// 	$newParticipant = new Participant;
	// 	$newParticipant->name = $name;
	// 	$newParticipant->key = $key;
	// 	$newParticipant->save();
	// }
public function getEdit($id){
	//$id = intval(Input::get('pId'));
	$person = Participant::find($id);
	return View::make('participants.edit', array('person' => $person));
}
public function postEdit(){
	$name = Input::get('name');
	$key = Input::get('key');
	$id = Input::get('id');
	$email = Input::get('email');
	$other_information = Input::get('other_information');

	$newParticipant = Participant::find($id);
	$newParticipant->name = $name;
	$newParticipant->key = $key;
	$newParticipant->email = $email;
	$newParticipant->other_information = $other_information;
	$newParticipant->save();

	return Redirect::action('ParticipantsController@getIndex');
}

public function getCreate(){
	return View::make('participants.create', array('key' => md5(uniqid(rand(), true))));
}
public function postCreate(){
		$name = Input::get('name');
		$key = Input::get('key');
		$email = Input::get('email');
		$other_information = Input::get('other_information');
		
		$newParticipant = new Participant;
		$newParticipant->name = $name;
		$newParticipant->key = $key;
		$newParticipant->email = $email;
		$newParticipant->other_information = $other_information;
		
		$newParticipant->save();
		return Redirect::action('ParticipantsController@getIndex');
}

public function getDelete($id){
	return View::make('participants.delete', array('person' => Participant::find($id)));
}
public function postDelete(){
	$person = Participant::find(Input::get('id'));
	$person->delete();
	return Redirect::action('ParticipantsController@getIndex');
}
}

?>
