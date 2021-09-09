<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CharacterItemsController extends Controller
{


    public function create(Character $character)
    {
        return view('items.add', [
            'items' => Item::all(),
        
            'character' => $character,
        ]);
    }

    public function store(Request $request, Character $character)
    {
        $validatedData = Validator::make(
            $request->all(),
            [
                'item_id' => ['integer', 'min:1', 'exists:items,id']
            ]
        )->validate();

        $item = Item::find($validatedData['item_id']);
        $character->items()->save($item);

        return redirect()->route('characters.show', $character);
    }
}

