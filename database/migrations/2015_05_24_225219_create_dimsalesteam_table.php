<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimsalesteamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dimSalesTeam', function(Blueprint $table)
		{
			$table->increments('id'); // INT, auto increment
			$table->string('sales_team_leader_lname'); // VARCHAR
			$table->string('sales_team_leader_fname'); // VARCHAR
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
		Schema::drop('dimSalesTeam');
	}

}
