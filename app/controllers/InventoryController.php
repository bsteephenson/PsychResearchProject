<?php

class InventoryController extends BaseController {
	//makes the page given the choser and the chosen
	public function getIndex(){
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

		return View::make('inventory.index', array('list' => $arrayOfAdjectives));
	}

	//creates a new row in db with the form data, redirects somewhere depending on other things..
	public function postInventoryForm(){}

}

?>