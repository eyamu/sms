<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassSubjectTable extends Migration {

public function up()
	{
		//
		Schema::create('class_subject', function($table){
			  $table->increments('id');
			   $table->integer('class_id')->unsigned()->nullable();
			  $table->integer('subject_id')->unsigned()->nullable();
			   $table->timestamps();
			   $table->foreign('class_id')->references('id')->on('classes')
                      ->onDelete('cascade')->onUpdate('cascade');
               $table->foreign('subject_id')->references('id')->on('subjects')
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
		Schema::drop('class_subject');
	}


}
