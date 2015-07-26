<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documents', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('name');
                        $table->integer('category_id')->unsigned()->nullable();
                        $table->integer('user_id')->unsigned();
                        $table->string('path');
                        $table->string('details')->nullable();
                        $table->string('updated_by')->nullable();
                        $table->boolean('is_approved')->default(0);
			$table->timestamps();
                        $table->foreign('category_id')->references('id')->on('doc_categories')
                    ->onDelete('cascade')->onUpdate('cascade');
                         $table->foreign('user_id')->references('id')->on('users')
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
		Schema::drop('documents');
	}

}
