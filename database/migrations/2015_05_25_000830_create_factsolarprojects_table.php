<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactsolarprojectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factSolarProjects', function(Blueprint $table)
		{
			$table->increments('id'); // INT, auto increment
			$table->integer('id_sales_team')->unsigned();
			$table->integer('id_provider')->unsigned();
			$table->integer('id_contractor')->unsigned();
			$table->integer('id_location')->unsigned();
			$table->integer('id_branch')->unsigned();
			$table->integer('id_time')->unsigned();
			$table->string('customer_lname');
			$table->string('customer_fname');
			$table->float('amount');
			$table->timestamps(); /// DATETIME created_at, updated_at

			// Foreign Keys
			/*$table->foreign('id_sales_team')->references('id')->on('dimSalesTeam');
			$table->foreign('id_provider')->references('id')->on('dimProvider');
			$table->foreign('id_contractor')->references('id')->on('dimContractor');
			$table->foreign('id_location')->references('id')->on('dimLocation');
			$table->foreign('id_branch')->references('id')->on('dimBranch');
			$table->foreign('id_time')->references('id')->on('dimTime');*/
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('factSolarProjects');
	}

}
