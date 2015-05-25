<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimtimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimTime', function(Blueprint $table)
		{
			$table->increments('id'); // INT, auto increment
			$table->timestamp('timestamp'); // VARCHAR
			$table->integer('year'); // VARCHAR
			$table->string('month'); // VARCHAR
			$table->integer('day'); // VARCHAR
			$table->integer('month_number'); // VARCHAR
			$table->string('day_of_week'); // VARCHAR
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
		Schema::drop('dimTime');
	}

}
