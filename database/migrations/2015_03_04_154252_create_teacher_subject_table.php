<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherSubjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('staff_subject', function($table){
			  $table->increments('id');
			  $table->integer('staff_id')->unsigned()->nullable();
			  $table->integer('subject_id')->unsigned()->nullable();	 
			  $table->timestamps();
			     $table->foreign('staff_id')->references('id')->on('staff')
                      ->onDelete('cascade')->onUpdate('cascade');
                  $table->foreign('subject_id')->references('id')->on('subjects')
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
		Schema::drop('staff_subject');
	}

}
