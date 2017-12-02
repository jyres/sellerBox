<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordRessetTable extends Migration {

	public function up()
	{
		Schema::create('password_resset', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email', 255);
			$table->string('last_password', 100)->unique();
			$table->timestamp('created_at');
			$table->string('new_password', 100)->unique();
		});
	}

	public function down()
	{
		Schema::drop('password_resset');
	}
}