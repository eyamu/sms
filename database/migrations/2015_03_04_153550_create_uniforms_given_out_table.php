<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniformsGivenOutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			//
		Schema::create('uniforms_given_out', function($table){
			  $table->increments('id');
			  $table->integer('student_id')->unsigned()->nullable();
			  $table->integer('uniform_id')->unsigned()->nullable();
			  $table->integer('quantity');
			   $table->boolean('status');//acknowledge if students has received full set of unifrom
			  $table->string('remark')->nullable();
			  $table->timestamps();
			   $table->foreign('student_id')->references('id')->on('students')
                      ->onDelete('cascade')->onUpdate('cascade');		
               $table->foreign('uniform_id')->references('id')->on('uniforms')
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
		Schema::drop('uniforms_given_out');
	}

}
