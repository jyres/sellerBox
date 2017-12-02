<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandTable extends Migration {

	public function up()
	{
		Schema::create('brand', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('brand_name', 30)->unique();
		});
	}

	public function down()
	{
		Schema::drop('brand');
	}
}