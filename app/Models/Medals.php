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
        return $this->hasOne(Athletes::class);
    }
    public function countries() {
        return $this->hasOne(Countries::class);
    }
    public function sports() {
        return $this->hasOne(Sport::class);
    }
    use HasFactory;
}
