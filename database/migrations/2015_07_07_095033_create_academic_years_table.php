<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicYearsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
        public function up(){
            Schema::create('academic_years',  function ($table){
                $table->increments('id');
                 $table->string('periods')->nullable();//either based on semeters on terms
                $table->string('year');
                
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
            Schema::drop('academic_years');
	}

}
