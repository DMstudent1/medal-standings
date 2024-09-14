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

    public function newMedal(Request $request) {
        $athlete = new Athletes;
        $athlete->sur_name = $request->input('sur_name');
        $athlete->name = $request->input('name');
        $athlete->patronymic = $request->input('patronymic');
        $athlete->country_id = $request->input('country_id');
        $athlete->save();

        $athleteId = $athlete->id;

        $medal = new Medals;
        if ($request->input('medal-type') == 'gold-medal') {
            $medal->gold_medal = 1;
            $medal->silver_medal = 0;
            $medal->bronze_medal = 0;
        } else if ($request->input('medal-type') == 'silver-medal') {
            $medal->gold_medal = 0;
            $medal->silver_medal = 1;
            $medal->bronze_medal = 0;
        } else {
            $medal->gold_medal = 0;
            $medal->silver_medal = 0;
            $medal->bronze_medal = 1;
        }
        $medal->country_id = $request->input('country_id');
        $medal->sport_id = $request->input('sport_id');
        $medal->athletes_id = $athleteId;
        $medal->save();
        return redirect()->route('main');
    }
}
