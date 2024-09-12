<?php

namespace Database\Seeders;

use App\Models\Athletes;
use App\Models\Countries;
use App\Models\Medals;
use App\Models\Sport;
use Illuminate\Database\Seeder;

class MedalSeeder extends Seeder
{
    public function run()
    {
        

        
        $athletes = Athletes::all();
        $countries = Countries::all();
        $sports = Sport::all();


        $athleteIds = $athletes->pluck('id')->toArray();
        $countryIds = $countries->pluck('id')->toArray();
        $sportIds = $sports->pluck('id')->toArray();

        foreach ($athleteIds as $athleteId) {
            Medals::create(
                [   
                    'country_id' => $countryIds[array_rand($countryIds)],
                    'sport_id' => $sportIds[array_rand($sportIds)],
                    'athletes_id' => $athleteId,
                    'gold_medal' => rand(1, 10),
                    'silver_medal' => rand(1, 10),
                    'bronze_medal' => rand(1, 10),
                ]
            );
        }
    }
}
