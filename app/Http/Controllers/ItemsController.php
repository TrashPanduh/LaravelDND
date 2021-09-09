<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = Validator::make(
            $request->all(),
            [
                'item' => ['min:1', 'max:255', 'string', 'unique:items,name', 'required']
            ]
        )->validate();

        $item = Item::create([
            'name' => $validatedData['item'],
        ]);

        return redirect()->back()->with('message', 'Item added successfully');
    }

}
