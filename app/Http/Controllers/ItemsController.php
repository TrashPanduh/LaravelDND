<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = Validator::make(
            $request->all(),
            [
                'name' => ['min:1', 'max:255', 'string', 'unique:items,name', 'required'],
                'weight' => ['numeric']
            ]
        )->validate();

        $item = Item::create([
            'name' => $validatedData['name'],
            'weight' =>  $validatedData['weight'],
        ]);

        return redirect()->back()->with('message', 'Item added successfully');
    }
}
