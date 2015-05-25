<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimcontractorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimContractor', function(Blueprint $table)
		{
			$table->increments('id'); // INT, auto increment
			$table->string('contractor_company'); // VARCHAR
			$table->string('head_technician_lname'); // VARCHAR
			$table->string('head_technician_fname'); // VARCHAR
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
		Schema::drop('dimContractor');
	}

}
