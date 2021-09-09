<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $items = collect([
            "Wool", "Cheese"
        ]);

        $items->each(function ($item) {
            Item::create([
                'name' => $item
            ]);
        });
        
    }
}
