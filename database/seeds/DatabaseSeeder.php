<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('DimLocationTableSeeder');
		$this->call('DimContractorTableSeeder');
		$this->call('DimBranchTableSeeder');
		$this->call('DimTimeTableSeeder');
		$this->call('DimSalesTeamTableSeeder');
		$this->call('DimSystemTableSeeder');
		$this->call('DimProviderTableSeeder');

		$this->call('FactSolarProjectsTableSeeder');
	}

}
