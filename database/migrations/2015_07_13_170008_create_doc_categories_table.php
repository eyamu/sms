
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doc_categories', function(Blueprint $table)
		{
			
			$table->increments('id');
                        $table->string('name');
                        $table->string('user_type')->nullable();
                        $table->string('updated_by')->nullable();
                        $table->boolean('is_status')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('doc_categories');
	}

}
