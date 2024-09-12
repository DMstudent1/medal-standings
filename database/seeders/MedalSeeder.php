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

        $athlete_Ids = $athletes->pluck('id')->toArray();
        $country_Ids = $countries->pluck('id')->toArray();
        $sport_Ids = $sports->pluck('id')->toArray();

        foreach ($athlete_Ids as $athlete_Id) {
            $medalType = rand(1, 3); 
            $goldMedal = 0;
            $silverMedal = 0;
            $bronzeMedal = 0;

            switch ($medalType) {
                case 1:
                    $goldMedal = 1; 
                    break;
                case 2:
                    $silverMedal = 1; 
                    break;
                case 3:
                    $bronzeMedal = 1; 
                    break;
            }

            Medals::create(
                [
                    'country_id' => $country_Ids[array_rand($country_Ids)],
                    'sport_id' => $sport_Ids[array_rand($sport_Ids)],
                    'athletes_id' => $athlete_Id,
                    'gold_medal' => $goldMedal,
                    'silver_medal' => $silverMedal,
                    'bronze_medal' => $bronzeMedal,
                ]
            );
        }
    }
}
