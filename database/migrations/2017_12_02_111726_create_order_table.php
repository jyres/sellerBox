<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	public function up()
	{
		Schema::create('order', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('delivery_address', 50);
			$table->integer('id_of_payment_method')->unsigned();
			$table->integer('id_customer')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('order');
	}
}