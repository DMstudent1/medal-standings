<?php

namespace App\Models;
use App\Models\Athletes;
use App\Models\Medals;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    public function athletes() 
    {
        return $this->hasMany(Athletes::class);
    }
    public function medals() 
    {
        return $this->hasMany(Medals::class);
    }
    use HasFactory;
}
