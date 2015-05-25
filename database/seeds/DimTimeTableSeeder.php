<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\DimTime;

class DimTimeTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker\Factory::create();

        DimTime::truncate();

        $times = [];
        foreach($this->createDateRangeArray( '1995-01-01', '2015-05-01' ) as $index => $value)  
        {  
            $dateTime = strtotime($value);

            $times[] = [   
                'timestamp' => $dateTime, 
                'year' => date('Y', $dateTime), 
                'month' => date('M', $dateTime), 
                'day' => date('j', $dateTime), 
                'month_number' => date('n', $dateTime), 
                'day_of_week' => date('D', $dateTime), 
            ];
        }
        DimTime::insert($times);

	}

    private function createDateRangeArray($strDateFrom,$strDateTo)
    {
        // takes two dates formatted as YYYY-MM-DD and creates an
        // inclusive array of the dates between the from and to dates.

        // could test validity of dates here but I'm already doing
        // that in the main script

        $aryRange=array();

        $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
        $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

        if ($iDateTo>=$iDateFrom)
        {
            array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry
            while ($iDateFrom<$iDateTo)
            {
                $iDateFrom+=86400; // add 24 hours
                array_push($aryRange,date('Y-m-d',$iDateFrom));
            }
        }
        return $aryRange;
    }
}
