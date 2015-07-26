<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			//
		Schema::create('salaries', function($table){
			  $table->increments('id');
			  $table->string('type');
			  $table->string('remark')->nullable();			 
			  $table->timestamps();
		
				}
			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('salaries');
	}

}
