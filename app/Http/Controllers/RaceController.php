<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\Character;
use Illuminate\Http\Request;

class RaceController extends Controller
{

    public function create()
    {
        return view('characters.add', [
            'Races' => Race::all()
        ]);
    }

    public function store(Request $request)
    {
        $character = Character::create([
            'name' => $request->input('name'),
            'HP' => $request->input('HP'),
        ]);
        $characterrace = Race::find($request->input('character-race'));
        $character->characterRaces()->save($characterrace);
        
        return redirect(route('characters.show', $character->id));
    }


}