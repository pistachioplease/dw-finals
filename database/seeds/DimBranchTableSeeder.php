<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\DimBranch;

class DimBranchTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

        DimBranch::truncate();

        foreach(range(1,12) as $index)  
        {  
            DimBranch::create([   
                'branch_name' => $faker->city, 
            ]);  
        }

	}

}