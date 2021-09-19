<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CharacterRaceSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CharacterClassSeeder::class,
            ItemSeeder::class,
            CharacterRaceSeeder::class,
            StatModifierSeeder::class,
        ]);
    }
}
