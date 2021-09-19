<?php

namespace Database\Seeders;

use App\Models\Modifier;
use Illuminate\Database\Seeder;

class StatModifierSeeder extends Seeder
{
    public function run()
    {
        $modifier = collect([
            [
                'base_value'     => 1,
                'modifier'   => -5
            ],
            [
                'base_value'     => 2,
                'modifier'   => -4
            ],
            [
                'base_value'     => 3,
                'modifier'   => -4
            ],
            [
                'base_value'     => 4,
                'modifier'   => -3
            ],
            [
                'base_value'     => 5,
                'modifier'   => -3
            ],
            [
                'base_value'     => 6,
                'modifier'   => -2
            ],
            [
                'base_value'     => 7,
                'modifier'   => -2
            ],
            [
                'base_value'     => 8,
                'modifier'   => -1
            ],
            [
                'base_value'     => 9,
                'modifier'   => -1
            ],
            [
                'base_value'     => 10,
                'modifier'   => 0
            ],
            [
                'base_value'     => 11,
                'modifier'   => 0
            ],
            [
                'base_value'     => 12,
                'modifier'   => 1
            ],
            [
                'base_value'     => 13,
                'modifier'   => 1
            ],
            [
                'base_value'     => 14,
                'modifier'   => 2
            ],
            [
                'base_value'     => 15,
                'modifier'   => 2
            ],
            [
                'base_value'     => 16,
                'modifier'   => 3
            ],
            [
                'base_value'     => 17,
                'modifier'   => 3
            ],
            [
                'base_value'     => 18,
                'modifier'   => 4
            ],
            [
                'base_value'     => 19,
                'modifier'   => 4
            ],
            [
                'base_value'     => 20,
                'modifier'   => 5
            ],
            [
                'base_value'     => 21,
                'modifier'   => 6
            ],
            [
                'base_value'     => 22,
                'modifier'   => 6
            ],
            [
                'base_value'     => 23,
                'modifier'   => 6
            ],
            [
                'base_value'     => 24,
                'modifier'   => 7
            ],
            [
                'base_value'     => 25,
                'modifier'   => 7
            ],
            [
                'base_value'     => 26,
                'modifier'   => 8
            ],
            [
                'base_value'     => 27,
                'modifier'   => 8
            ],
            [
                'base_value'     => 28,
                'modifier'   => 9
            ],
            [
                'base_value'     => 29,
                'modifier'   => 9
            ],
            [
                'base_value'     => 30,
                'modifier'   => 10
            ],
        ]);
        $modifier->each(fn($modifier) => Modifier::create($modifier));
    }
}
