<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\CharacterClass;
use Illuminate\Database\Seeder;

class CharacterRaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $races = collect([
            "Human", "Elf", "Half-elf", "Gnome", "Goliath"
        ]);

        $races->each(function ($race) {
            Race::create([
                'race' => $race
            ]);
        });
        
    }
}
