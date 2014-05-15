<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonalityInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personality_inventory', function($table){
			$table->increments('id');
			$table->integer('choserID');
			$table->integer('chosenID');
			$table->integer('o');
			$table->integer('c');
			$table->integer('e');
			$table->integer('a');
			$table->integer('n');
			$table->integer('how_well_you_know_the_person');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
