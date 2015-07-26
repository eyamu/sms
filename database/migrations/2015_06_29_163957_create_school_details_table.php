<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolDetailsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('school_details', function($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('category')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('email')->unique();
            $table->string('telephone')->nullable();
            $table->string('moto')->nullable();
            $table->string('vision')->nullable();
            $table->string('address')->nullable();
            $table->string('district')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('school_details');
    }

}
