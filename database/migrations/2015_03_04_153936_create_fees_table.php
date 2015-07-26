<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('fees', function($table){
			  $table->increments('id');
			  $table->integer('class_id')->unsigned()->nullable();
			    $table->integer('student_id')->unsigned()->nullable();
			  $table->string('name')->nullable();
                            $table->double('amount_charged');
			  $table->string('study_mode');
			  $table->boolean('status');
			   $table->date('deadline');
			  $table->timestamps();
			   $table->foreign('class_id')->references('id')->on('classes')
                      ->onDelete('cascade')->onUpdate('cascade');
               $table->foreign('student_id')->references('id')->on('students')
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
		Schema::drop('fees');
	}

}
