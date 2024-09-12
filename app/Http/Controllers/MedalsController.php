<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use App\Models\Medals;
use Illuminate\Http\Request;

class MedalsController extends Controller
{
    
    public function show() {
        $medals = Medals::all();
        
        $medalsGrouped = Medals::select('country_id')
        ->selectRaw('SUM(gold_medal) as total_gold')
        ->selectRaw('SUM(silver_medal) as total_silver')
        ->selectRaw('SUM(bronze_medal) as total_bronze')
        ->selectRaw('SUM(gold_medal + silver_medal + bronze_medal) as total_medals')
        ->groupBy('country_id')
        ->orderBy('total_gold', 'desc')
        ->orderBy('total_silver', 'desc')
        ->orderBy('total_bronze', 'desc')
        ->get();
        
        return view('medals.show', [
            'medals' => $medals,
            'medalsGrouped' => $medalsGrouped
        ]);
        
    }
}
