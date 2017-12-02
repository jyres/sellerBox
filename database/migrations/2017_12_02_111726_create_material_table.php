<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaterialTable extends Migration {

	public function up()
	{
		Schema::create('material', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('materialName', 30)->unique();
		});
	}

	public function down()
	{
		Schema::drop('material');
	}
}