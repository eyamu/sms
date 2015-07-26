<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('results', function($table) {
            $table->increments('id');
            $table->integer('exam_id')->unsigned()->nullable();
            $table->integer('student_id')->unsigned()->nullable();
            $table->integer('subject_id')->unsigned()->nullable();
            $table->integer('term_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable(); //to track who recorded the marks
            $table->double('marks')->nullable();
            $table->timestamps();
            $table->foreign('exam_id')->references('id')->on('exams')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('student_id')->references('id')->on('students')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('term_id')->references('id')->on('terms')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')->onUpdate('cascade');
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('results');
    }

}
