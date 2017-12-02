<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentMethodTable extends Migration {

	public function up()
	{
		Schema::create('payment_method', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('pm_name', 30)->unique();
		});
	}

	public function down()
	{
		Schema::drop('payment_method');
	}
}