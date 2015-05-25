<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\DimLocation;

class DimLocationTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

        DimLocation::truncate();

        $json = file_get_contents('http://api.sba.gov/geodata/city_county_links_for_state_of/CA.json');
	    $counties = json_decode($json);

        $locations = [];
        foreach($counties as $index => $county)  
        {      
            if ( $county->county_name != '' )    	
                $locations[] = [   
                    // 'address' => $faker->streetAddress(),  
                    'city' =>  $county->county_name,  
                    'state' => 'CA',  
                ];  
        }
        DimLocation::insert($locations);

	}

}