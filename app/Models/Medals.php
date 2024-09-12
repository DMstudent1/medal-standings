<?php

namespace App\Models;
use App\Models\Athletes;
use App\Models\Countries;
use App\Models\Sport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medals extends Model
{
    public function athletes() {
        return $this->belongsTo(Athletes::class, 'athletes_id');
    }
    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id');
    }
    public function sports() {
        return $this->belongsTo(Sport::class, 'sport_id');
    }
    use HasFactory;
}
