<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		//
		Schema::create('staff', function($table){
			  $table->increments('id');
			  $table->integer('user_id')->unsigned()->nullable();
			  $table->string('firstname');
			  $table->string('lastname');
			  $table->string('phone')->nullable();
			   $table->string('gender');
			  $table->string('dob')->nullable();
			  $table->string('district')->nullable();
			  $table->date('date_joined')->nullable();
			  $table->binary('photo')->nullable();
			  $table->string('email')->nullable();
			  $table->string('description')->nullable();
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
		Schema::drop('staff');
	}

}
