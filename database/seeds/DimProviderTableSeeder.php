<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\DimProvider;

class DimProviderTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

        DimProvider::truncate();

        $providers = [
            'Sun Power',
            'Sun Edison',
            'Canadian Solar',
            'Hanwha',
            'ReneSola',
            'Solar World',
            'SMA',
            'Fronius',
            'enphase Energy',
            'Solar Edge',
            'Kaco',
            'Power One',
            'Solectria Renewables',
        ];

        foreach($providers as $provider)  
        {  
            DimProvider::create([   
                'provider_name' => $provider, 
            ]);  
        }

	}

}