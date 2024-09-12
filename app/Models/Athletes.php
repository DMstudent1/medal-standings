<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Countries;
use App\Models\Medals;
use Illuminate\Database\Eloquent\Model;

class Athletes extends Model
{
    public function countries() 
    {
        return $this->hasOne(Countries::class);
    }
    public function medals() 
    {
        return $this->hasMany(Medals::class);
    }
    use HasFactory;
}
