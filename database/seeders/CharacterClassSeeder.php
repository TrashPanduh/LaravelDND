<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CharacterClass;

class CharacterClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classNames = collect([
            "Bard", "Barbarian"
        ]);

        $classNames->each(function ($className) {
            CharacterClass::create([
                'name' => $className
            ]);
        });
        
    }
}
