<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\DimContractor;

class DimContractorTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();
		$faker->addProvider(new CompanyNameGenerator\FakerProvider($faker));

        DimContractor::truncate();

        foreach(range(1,50) as $index)  
        {  
            DimContractor::create([   
                'contractor_company' => $faker->companyName,  
                'head_technician_lname' => $faker->lastName,  
                'head_technician_fname' => $faker->firstName,  
            ]);  
        }

	}

}