<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	public function up()
	{
		Schema::create('customer', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('customer_name', 50);
			$table->string('customer_pseudo', 30);
			$table->string('customer_password', 50)->nullable();
			$table->string('customer_address', 30)->nullable();
			$table->string('customer_email', 60)->unique();
			$table->integer('customer_contact')->unique();
			$table->integer('customer_contact2');
		});
	}

	public function down()
	{
		Schema::drop('customer');
	}
}