<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentRecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('payment_records', function($table){
			  $table->increments('id');
			  $table->integer('student_id')->unsigned()->nullable();
			  $table->integer('fee_id')->unsigned()->nullable();
			  $table->integer('requirement_id')->unsigned()->nullable();
			  $table->string('recorded_by');
                          $table->string('date');
                          $table->string('term');//in which term is the money being paid
                          $table->string('receipt_no')->nullable();
			  $table->double('amount');
                          $table->string('payment_mode');
			  $table->string('bank')->nullable();
			  $table->string('branch_name')->nullable();
			  $table->string('cheque_number')->nullable();
			  $table->boolean('status')->nullable();
			  $table->timestamps();
              $table->foreign('student_id')->references('id')->on('students')
                      ->onDelete('cascade')->onUpdate('cascade');
               $table->foreign('fee_id')->references('id')->on('fees')
                      ->onDelete('cascade')->onUpdate('cascade');		
               $table->foreign('requirement_id')->references('id')->on('requirements')
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
		Schema::drop('payment_records');
	}

}
