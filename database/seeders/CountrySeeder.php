<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Countries;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CountrySeeder extends Seeder
{
    
    public function run()
    {
        $countries = ['Россия', 'США', 'Китай', 'Польша', 'Япония'];
        foreach ($countries as $country) {
            Countries::create(['name' => $country]);
        }
    }
}
