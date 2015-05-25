<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\DimSalesTeam;

class DimSalesTeamTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

        DimSalesTeam::truncate();

        $salesteams = [];
        foreach(range(1,125) as $index)  
        {  
            $salesteams[] = [   
                'sales_team_leader_lname' => $faker->lastName, 
                'sales_team_leader_fname' => $faker->firstName, 
            ];  
        }
        DimSalesTeam::insert($salesteams);

	}

}