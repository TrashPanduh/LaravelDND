<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\CharacterItem;

class ItemRemovalController extends Controller
{
    public function removeOne(Request $request, Character $character, Item $item)
    {
        $character
            ->characterItems()
            ->where('item_id', $item->id)
            ->first()
            ->delete();

        return redirect()->back();
    }

    public function removeAll(Request $request, Character $character, Item $item)
    {
        $character->items()->detach($item);

        return redirect()->back();
        
    
    }
}
