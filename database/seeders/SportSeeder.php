<?php

namespace Database\Seeders;
use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{

    public function run()
    {
        $sports = ['Футбол', 'Баскетболл', 'Бокс', 'Теннис', 'Плавание'];
        foreach ($sports as $sport) {
            Sport::create(['name' => $sport]);
        }
    }
}
