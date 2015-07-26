<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('students', function($table){
			  $table->increments('id');
			   $table->integer('user_id')->unsigned()->nullable();
			  $table->string('firstname');
			  $table->string('lastname');
			   $table->string('middlename')->nullable();
			   $table->string('current_class')->nullable();
			  $table->string('gender');
			  $table->string('study_mode')->nullable();
			  $table->boolean('status')->nullable();
			  $table->boolean('bursary')->nullable();
			  $table->string('dob')->nullable();
                          $table->string('religion')->nullable();
			  $table->string('date_joined')->nullable();
			  $table->string('photo')->nullable();
			   $table->timestamps();
			  $table->foreign('user_id')->references('id')->on('users')
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
		Schema::drop('students');
	}

}
