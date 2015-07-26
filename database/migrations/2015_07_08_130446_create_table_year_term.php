<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableYearTerm extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('year_term', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year_id')->unsigned()->nullable();
            $table->integer('term_id')->unsigned()->nullable();
            $table->string('start_date');
             $table->string('end_date');
            $table->foreign('year_id')->references('id')->on('academic_years')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('term_id')->references('id')->on('terms')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('year_term');
    }

}
