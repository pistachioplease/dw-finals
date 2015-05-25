<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimproviderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimProvider', function(Blueprint $table)
		{
			$table->increments('id'); // INT, auto increment
			$table->string('provider_name'); // VARCHAR
			$table->timestamps(); /// DATETIME created_at, updated_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dimProvider');
	}

}
