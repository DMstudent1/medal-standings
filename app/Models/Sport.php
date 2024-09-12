<?php

namespace App\Models;
use App\Models\Medals;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function medals() {
        return $this->hasMany(Medals::class);
    }
    use HasFactory;
}
