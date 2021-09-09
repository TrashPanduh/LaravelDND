<?php

namespace App\Http\Controllers;

use App\Models\Race;
use App\Models\Character;
use Illuminate\Http\Request;
use App\Models\CharacterClass;
use Illuminate\Support\Facades\Validator;

class CharactersController extends Controller
{
    public function create()
    {
        return view('characters.create', [
            'character_classes' => CharacterClass::all(),
            'character_races' => Race::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = Validator::make(
            $request->all(),
            [
                'name' => ['max:255', 'string', 'required', 'alpha'],
                'HP' => ['integer', 'required'],
                'base_str' => ['max:30', 'min:1', 'integer', 'required'],
                'base_dex' => ['max:30', 'min:1', 'integer', 'required'],
                'base_con' => ['max:30', 'min:1', 'integer', 'required'],
                'base_int' => ['max:30', 'min:1', 'integer', 'required'],
                'base_wis' => ['max:30', 'min:1', 'integer', 'required'],
                'base_cha' => ['max:30', 'min:1', 'integer', 'required'],
                'character-class' => ['exists:character_classes,id', 'integer', 'required'],
                'character-race' => ['exists:races,id', 'integer', 'required']
            ],
            [],
            [
                'base_str' => '"Strength" field',
                'base_dex' => '"Dexterity" field', 
                'base_con' => '"Constitution" field', 
                'base_int' => '"Intelligence" field', 
                'base_wis' => '"Wisdom" field', 
                'base_cha' => '"Charisma" field', 
            ]
        )->validate();


        // $validatedData = $request->validate([
        //     'name' => ['max:5', 'string', 'required', 'alpha'],
        //     'HP' => ['integer', 'required'],
        //     'base_str' => ['max:30', 'min:0', 'integer', 'required'],
        //     'base_dex' => ['max:30', 'integer', 'required'],
        //     'base_con' => ['max:30', 'integer', 'required'],
        //     'base_int' => ['max:30', 'integer', 'required'],
        //     'base_wis' => ['max:30', 'integer', 'required'],
        //     'base_cha' => ['max:30', 'integer', 'required'],
        //     'character-class' => ['exists:character_classes,id', 'integer', 'required'],
        //     'character-race' => ['exists:races,id', 'integer', 'required'],


        // ]);

        //use method find or fail when looking up models in controllers
        $race = Race::findOrFail($request->input('character-race'));
        $character = Character::create([
            'name' => $validatedData['name'],
            'HP' => $request->input('HP'),
            'race_id' => $race->id,
            'base_str'=> $request->input('base_str'),
            'base_dex'=> $request->input('base_dex'),
            'base_con'=> $request->input('base_con'),
            'base_int'=> $request->input('base_int'),
            'base_wis'=> $request->input('base_wis'),
            'base_cha'=> $request->input('base_cha'),
        ]);

        $characterclass = CharacterClass::find($request->input('character-class'));
        $character->characterClasses()->save($characterclass);
        
        
        $selectedrace = Race::find($request->input('character-race'));
        $selectedrace->characters()->save($character);
        
        return redirect(route('characters.show', $character->id));
    }

    public function show(Character $character)
    {
        return view('characters.show', [
            'character' => $character
        ]);
    }
}
