<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration {

	public function up()
	{
		Schema::create('category', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('category_name', 30)->unique();
			$table->string('category_country', 30)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('category');
	}
}