<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassRequirementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('class_requirement', function($table){
			  $table->increments('id');
			  $table->integer('class_id')->unsigned()->nullable();
			  $table->integer('requirement_id')->unsigned()->nullable();	 
			  $table->timestamps();
			     $table->foreign('class_id')->references('id')->on('classes')
                      ->onDelete('cascade')->onUpdate('cascade');
                  $table->foreign('requirement_id')->references('id')->on('requirements')
                      ->onDelete('cascade')->onUpdate('cascade');
		
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
		Schema::drop('class_requirement');
	}

}
