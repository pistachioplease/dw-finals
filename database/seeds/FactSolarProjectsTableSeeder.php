<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\FactSolarProjects;

class FactSolarProjectsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

        // FactSolarProjects::truncate();

        $solarprojects = [];
        foreach(range(1,7000) as $index)  
        {  
            $solarprojects[] =[   
                'id_sales_team' => $faker->numberBetween(1, 125),
                'id_provider' => $faker->numberBetween(1, 13),
                'id_contractor' => $faker->numberBetween(1, 50),
                'id_location' => $faker->numberBetween(1, 431),
                'id_branch' => $faker->numberBetween(1, 12),
                'id_time' => $faker->biasedNumberBetween(1, 7426),
                'customer_lname' => $faker->lastName,
                'customer_fname' => $faker->firstName,
                'amount' => $faker->randomFloat( 2, 100, 15000 ),
            ];  
        }
        FactSolarProjects::insert($solarprojects);

	}

}