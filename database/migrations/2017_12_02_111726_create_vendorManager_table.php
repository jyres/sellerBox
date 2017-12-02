<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorManagerTable extends Migration {

	public function up()
	{
		Schema::create('vendorManager', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('vm_name', 50);
			$table->string('vm_password');
			$table->string('vm_contact', 30);
			$table->string('vm_email', 60)->unique();
			$table->string('vm_given_name', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('vendorManager');
	}
}