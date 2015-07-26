<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffSalaryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
	Schema::create('staff_salary', function($table){
			  $table->increments('id');
			  $table->integer('staff_id')->unsigned()->nullable();
			  $table->integer('salary_id')->unsigned()->nullable();
			  $table->string('amount');
			  $table->string('month')->nullable();
			  $table->string('remark')->nullable();			 
			  $table->timestamps();
			     $table->foreign('staff_id')->references('id')->on('staff')
                      ->onDelete('cascade')->onUpdate('cascade');
                  $table->foreign('salary_id')->references('id')->on('salaries')
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
		Schema::drop('salaries_teachers');
	}

}
