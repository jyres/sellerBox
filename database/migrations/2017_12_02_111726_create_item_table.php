<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTable extends Migration {

	public function up()
	{
		Schema::create('item', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('item_name', 50);
			$table->text('item_description');
			$table->bigInteger('item_price');
			$table->bigInteger('item_selling_price');
			$table->string('item_image', 50);
			$table->enum('item_status', array('active', 'disabled'));
			$table->integer('stock');
			$table->integer('mass');
			$table->string('color', 20);
			$table->enum('condition', array('new', 'secondHand'));
			$table->integer('id_brand')->unsigned();
			$table->date('expiration_date')->nullable();
			$table->integer('id_material')->unsigned();
			$table->integer('id_shop')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('item');
	}
}