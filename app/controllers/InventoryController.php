<?php

class InventoryController extends BaseController {
	//makes the page given the choser and the chosen
	public function getInventoryPage(){

		$arrayOfAdjectives = array(
			'loner', 'quiet', 'passive', 'reserved',
			'joiner', 'talkative', 'active', 'affectionable',

			'suspicious', 'critical', 'rutheless', 'irratable',
			'trusting', 'lenient', 'soft-hearted', 'good-natured',

			'negligent','lazy','disorganized','late',
			'conscientious','hard-working','well-organized','punctual',

			'calm','even-tempered','comfortable','unemotional',
			'worried','temperamental','self-conscious','emotional',

			'down-to-earth','uncreative','conventional','uncurious',
			'imaginative','creative','original','curious'
			);


		//todo : randomize list
		if(Session::has('key')){
			return View::make('inventory.index', array('list' => $arrayOfAdjectives));
		}
	}

	//creates a new row in db with the form data, redirects somewhere depending on other things..
	public function postInventoryForm(){
		$e =  Input::get('joiner')
			+ Input::get('talkative')
			+ Input::get('active')
			+ Input::get('affectionable')
			- Input::get('loner')
			- Input::get('quiet')
			- Input::get('passive')
			- Input::get('reserved');

		$a =  Input::get('trusting')
			+ Input::get('lenient')
			+ Input::get('soft-hearted')
			+ Input::get('good-natured')
			- Input::get('suspicious')
			- Input::get('critical')
			- Input::get('rutheless')
			- Input::get('irratable');

		$c =  Input::get('conscientious')
			+ Input::get('hard-working')
			+ Input::get('well-organized')
			+ Input::get('punctual')
			- Input::get('negligent')
			- Input::get('lazy')
			- Input::get('disorganized')
			- Input::get('late');

		$o =  Input::get('imaginative')
			+ Input::get('creative')
			+ Input::get('original')
			+ Input::get('curious')
			- Input::get('down-to-earth')
			- Input::get('uncreative')
			- Input::get('conventional')
			- Input::get('uncurious');

		$n =  Input::get('worried')
			+ Input::get('temperamental')
			+ Input::get('self-conscious')
			+ Input::get('emotional')
			- Input::get('calm')
			- Input::get('even-tempered')
			- Input::get('comfortable')
			- Input::get('unemotional');
		
		$choser = Session::get('choser');
		$chosen = Session::get('chosen');

		$row = new PersonalityInventory;
		
		$row->choserID = $choser;
		$row->chosenID = $chosen;
		$row->o = $o;
		$row->c = $c;
		$row->e = $e;
		$row->a = $a;
		$row->n = $n;

		$row->save();

	}

}

?>