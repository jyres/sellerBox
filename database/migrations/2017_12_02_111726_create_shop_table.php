<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShopTable extends Migration {

	public function up()
	{
		Schema::create('shop', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_admin')->unsigned();
			$table->string('shop_name', 50)->unique();
			$table->string('shop_tax_payer_number', 50)->unique();
		});
	}

	public function down()
	{
		Schema::drop('shop');
	}
}