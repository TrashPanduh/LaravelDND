<?php

namespace Database\Seeders;

use App\Models\Race;
use App\Models\CharacterClass;
use Illuminate\Database\Seeder;

class CharacterRaceSeeder extends Seeder
{
    public function run()
    {
        // $races = collect([
        //     "Human", "Elf", "Half-elf", "Gnome", "Goliath"
        // ]);

        // $races->each(function ($race) {
        //     Race::create([
        //         'race' => $race
        //     ]);
        // });

        $race = collect([
            [
                'race'         => 'Human',
                'subrace'      => 'Versitile',
                'size'          => 'medium',
                'walking_speed' => 30,
                'str_mod'       => '1',
                'dex_mod'       => '1',
                'con_mod'       => '1',
                'int_mod'       => '1',
                'wis_mod'       => '1',
                'cha_mod'       => '1',
            ],
            [
                'race'         => 'Elf',
                'subrace'      => 'High Elf',
                'size'          => 'medium',
                'walking_speed' => 30,
                'str_mod'       => '0',
                'dex_mod'       => '2',
                'con_mod'       => '0',
                'int_mod'       => '1',
                'wis_mod'       => '0',
                'cha_mod'       => '0',
            ],
            [
                'race'         => 'Elf',
                'subrace'      => 'Wood Elf',
                'size'          => 'medium',
                'walking_speed' => 35,
                'str_mod'       => '0',
                'dex_mod'       => '2',
                'con_mod'       => '0',
                'int_mod'       => '0',
                'wis_mod'       => '1',
                'cha_mod'       => '0',
            ],
            [
                'race'         => 'Half-elf',
                'subrace'      => 'Water',
                'size'          => 'Medium',
                'walking_speed' => 30,
                'swim_speed'    => 40,
                'str_mod'       => '0',
                'dex_mod'       => '0',
                'con_mod'       => '0',
                'int_mod'       => '0',
                'wis_mod'       => '0',
                'cha_mod'       => '2',
            ],
            [
                'race'         => 'Gnome',
                'subrace'      => 'Rock Gnome',
                'size'          => 'Small',
                'walking_speed' => 30,
                'str_mod'       => '0',
                'dex_mod'       => '2',
                'con_mod'       => '1',
                'int_mod'       => '0',
                'wis_mod'       => '0',
                'cha_mod'       => '0',
            ],
            [
                'race'         => 'Gnome',
                'subrace'      => 'Forest',
                'size'          => 'Small',
                'walking_speed' => 30,
                'str_mod'       => '0',
                'dex_mod'       => '2',
                'con_mod'       => '0',
                'int_mod'       => '1',
                'wis_mod'       => '0',
                'cha_mod'       => '0',
            ],
            [
                'race'         => 'Goliath',
                'subrace'      => 'none',
                'size'          => 'medium',
                'walking_speed' => 30,
                'str_mod'       => '2',
                'dex_mod'       => '0',
                'con_mod'       => '1',
                'int_mod'       => '0',
                'wis_mod'       => '0',
                'cha_mod'       => '0',
            ]
            ]);
        $race->each(fn($race) => Race::create($race));
    }
}
