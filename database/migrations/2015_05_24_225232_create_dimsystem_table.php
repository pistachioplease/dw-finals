<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimsystemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimSystem', function(Blueprint $table)
		{
			$table->increments('id'); // INT, auto increment
			$table->string('system_name'); // VARCHAR
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
		Schema::drop('dimSystem');
	}

}
