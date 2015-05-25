<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\DimSystem;

class DimSystemTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

        DimSystem::truncate();

        $systems = [
        	'Roof Mounted System',
        	'Ground Mounted System',
        	'Post Mounted System',
        	'Carport System',
        	'Tilted Single Axis Trackers',
        	'Dual Axis Trackers',
        ];

        foreach($systems as $system)  
        {  
            DimSystem::create([   
                'system_name' => $system, 
            ]);  
        }

	}

}