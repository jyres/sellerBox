<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	public function up()
	{
		Schema::create('admin', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('admin_name', 30);
			$table->string('admin_password', 60);
			$table->string('admin_email', 50)->unique();
			$table->integer('admin_contact')->unique();
			$table->string('admin_address', 30)->unique()->nullable();
			$table->string('seller_address', 30)->unique()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('admin');
	}
}