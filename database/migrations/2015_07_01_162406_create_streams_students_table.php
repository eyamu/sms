<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreamsStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('streams_students',function($table){
            $table->increments('id');
            $table->integer('stream_id')->unsigned()->nullable();
             $table->integer('student_id')->unsigned()->nullable();
            $table->string('year');
            $table->foreign('stream_id')->references('id')->on('streams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
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
            Schema::drop('streams_students');
	}

}
