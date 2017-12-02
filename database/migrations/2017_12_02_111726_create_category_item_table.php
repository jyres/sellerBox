<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryItemTable extends Migration {

	public function up()
	{
		Schema::create('category_item', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('item_id')->unsigned();
			$table->integer('category_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('category_item');
	}
}