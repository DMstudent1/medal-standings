<?php

namespace Database\Seeders;
use App\Models\Athletes;
use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AthleteSeeder extends Seeder
{

    public function run()
    {
        $athletes = 
        [
            ['Иванов', 'Алексей', 'Алексеевич'],
            ['Петров', 'Сергей', 'Сергеевич'],
            ['Сидоров', 'Дмитрий', 'Дмитриевич'],
            ['Кузнецов', 'Иван', 'Иванович'],
            ['Смирнов', 'Андрей', 'Андреевич'],
            ['Попов', 'Владимир', 'Владимирович'],
            ['Лебедев', 'Максим', 'Максимович'],
            ['Козлов', 'Олег', 'Олегович'],
            ['Новиков', 'Евгений', 'Евгеньевич'],
            ['Морозов', 'Николай', 'Николаевич'],
        ];
        $countries = Countries::all();
        foreach($countries as $country) {
            foreach ($athletes as $athlete) {
                Athletes::create(
                    [
                        'sur_name' => $athlete[0],
                        'name' => $athlete[1],
                        'patronymic' => $athlete[2],
                        'country_id' => $country->id
                    ]
                );
            }
        }
    }
}
