<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			//
		Schema::create('costs', function($table){
			  $table->increments('id');
			  $table->string('type');
			   $table->string('name');
		       $table->double('amount');
		      $table->integer('month');
			  $table->boolean('status');
			   $table->date('date');
			    $table->string('remark')->nullable();
			  $table->timestamps();
		
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
		Schema::drop('costs');
	}

}
