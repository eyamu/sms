<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
			Schema::create('attendances', function($table){
			  $table->increments('id');
			  $table->integer('student_id')->unsigned()->nullable();
			    $table->integer('stream_id')->unsigned()->nullable();
			  $table->date('year');
			  $table->string('term');
			  $table->timestamps();
              $table->foreign('student_id')->references('id')->on('students')
                      ->onDelete('cascade')->onUpdate('cascade');
               $table->foreign('stream_id')->references('id')->on('streams')
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
		Schema::drop('attendances');
	}

}
