<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		//
		Schema::create('streams', function($table){
			  $table->increments('id');
			  $table->integer('class_id')->unsigned()->nullable();
			  $table->integer('teacher_id')->unsigned()->nullable();
			  $table->string('name');
              $table->foreign('class_id')->references('id')->on('classes')
                      ->onDelete('cascade')->onUpdate('cascade');
		      $table->foreign('teacher_id')->references('id')->on('staff')
                      ->onDelete('cascade')->onUpdate('cascade');
		

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
		Schema::drop('streams');
	}

}
