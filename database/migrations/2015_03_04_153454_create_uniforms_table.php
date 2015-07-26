<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniformsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			//
		Schema::create('uniforms', function($table){
			  $table->increments('id');
			  $table->string('item');
			  $table->integer('quantity');
			    $table->string('description');
			  $table->date('date_added');
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
		Schema::drop('uniforms');
	}

}
