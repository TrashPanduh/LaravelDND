<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $items = collect([
            [
                'name'     => 'Wool',
                'weight'   => 1,
                'sub_type' => 'Misc'
            ], 
            [
                'name'     => 'Cheese',
                'weight'   => 0.5,
                'sub_type' => 'Rations'
            ],
            [
                'name'   => 'Tent',
                'weight' => 30,
                'sub_type' => 'Adventuring'
            ],
            [
                'name'   => 'Piton',
                'weight' => 5,
                'sub_type' => 'Adventuring'
            ],
            [
                'name'   => 'Arrows',
                'weight' => 1,
                'sub_type' => 'Ammunition'
            ],
            [
                'name'   => 'Dagger',
                'weight' => 1,
                'sub_type' => 'Weapon'
            ],
            [
                'name'   => 'Shortsword',
                'weight' => 8,
                'sub_type' => 'Weapon'
            ],
            [
                'name'   => 'Short Bow',
                'weight' => 6,
                'sub_type' => 'Weapon'
            ],
            [
                'name'   => 'Long Bow',
                'weight' => 15,
                'sub_type' => 'Weapon'
            ],
            [
                'name'   => 'Studded Leather',
                'weight' => 15,
                'sub_type' => 'Armor'
            ],
            [
                'name'   => 'Full Plate',
                'weight' => 30,
                'sub_type' => 'Armor'
            ],
            [
                'name'       => 'Hunters Bow',
                'weight'     => 10,
                'sub_type'   => 'Weapon',
                'magical'    => true,
                'magic_type' => 'transmutation'
            ]
        ]);

        $items->each(fn($item) => Item::create($item));
        
    }
}
