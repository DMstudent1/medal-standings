<?php

namespace App\Http\Controllers;
use App\Models\Medals;
use Illuminate\Http\Request;

class MedalsController extends Controller
{
    public function show() {
        $medals = Medals::find(1);
        //dump($medals->name);
        return view('medals.show', ['name' => $medals->name]);
    }
}
