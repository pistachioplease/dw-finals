<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimlocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimLocation', function(Blueprint $table)
		{
			$table->increments('id'); // INT, auto increment
			$table->string('address'); // VARCHAR
			$table->string('city'); // VARCHAR
			$table->string('state'); // VARCHAR
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
		Schema::drop('dimLocation');
	}

}
