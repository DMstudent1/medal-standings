<?php

namespace App\Http\Controllers;

use App\Models\Athletes;
use App\Models\Countries;
use App\Models\Medals;
use App\Models\Sport;
use Illuminate\Http\Request;

class MedalsController extends Controller
{
    
    public function show() {
        $countries = Countries::all();
        $sports = Sport::all();
        $athletes = Athletes::all();
        $medals = Medals::select('country_id')
        ->selectRaw('SUM(gold_medal) as total_gold')
        ->selectRaw('SUM(silver_medal) as total_silver')
        ->selectRaw('SUM(bronze_medal) as total_bronze')
        ->selectRaw('SUM(gold_medal + silver_medal + bronze_medal) as total_medal')
        ->groupBy('country_id')
        ->orderBy('total_medal', 'desc')
        ->get();
        
        $medalsArray = $medals->toArray();
        return view('medals.show', [
            'medals' => $medals,
            'countries' => $countries,
            'sports' => $sports,
            'athletes' => $athletes,
            'medalsArray' => $medalsArray
        ]);
        
    }
}
