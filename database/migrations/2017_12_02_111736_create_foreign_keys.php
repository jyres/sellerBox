<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('shop', function(Blueprint $table) {
			$table->foreign('id_admin')->references('id')->on('admin')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->foreign('id_brand')->references('id')->on('brand')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->foreign('id_material')->references('id')->on('material')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->foreign('id_shop')->references('id')->on('shop')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('order', function(Blueprint $table) {
			$table->foreign('id_of_payment_method')->references('id')->on('payment_method')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('order', function(Blueprint $table) {
			$table->foreign('id_customer')->references('id')->on('customer')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('item_order', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('order')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('item_order', function(Blueprint $table) {
			$table->foreign('item_id')->references('id')->on('item')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('category_item', function(Blueprint $table) {
			$table->foreign('item_id')->references('id')->on('item')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('category_item', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('category')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('shop', function(Blueprint $table) {
			$table->dropForeign('shop_id_admin_foreign');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->dropForeign('item_id_brand_foreign');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->dropForeign('item_id_material_foreign');
		});
		Schema::table('item', function(Blueprint $table) {
			$table->dropForeign('item_id_shop_foreign');
		});
		Schema::table('order', function(Blueprint $table) {
			$table->dropForeign('order_id_of_payment_method_foreign');
		});
		Schema::table('order', function(Blueprint $table) {
			$table->dropForeign('order_id_customer_foreign');
		});
		Schema::table('item_order', function(Blueprint $table) {
			$table->dropForeign('item_order_order_id_foreign');
		});
		Schema::table('item_order', function(Blueprint $table) {
			$table->dropForeign('item_order_item_id_foreign');
		});
		Schema::table('category_item', function(Blueprint $table) {
			$table->dropForeign('category_item_item_id_foreign');
		});
		Schema::table('category_item', function(Blueprint $table) {
			$table->dropForeign('category_item_category_id_foreign');
		});
	}
}