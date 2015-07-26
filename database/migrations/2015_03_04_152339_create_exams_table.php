<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('exams', function($table){
			  $table->increments('id');
			  $table->integer('exam_type_id')->unsigned()->nullable();
			  $table->string('name');
			  $table->datetime('start_date')->nullable();
              $table->foreign('exam_type_id')->references('id')->on('exam_types')
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
		Schema::drop('exams');
	}

}
