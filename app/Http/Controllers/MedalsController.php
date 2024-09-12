<?php

namespace App\Http\Controllers;
use App\Models\Medals;
use Illuminate\Http\Request;

class MedalsController extends Controller
{
    public function show() {
        $medals = Medals::all();

        return view('medals.show', ['medals' => $medals]);
    }
}
