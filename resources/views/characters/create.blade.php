<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Character</title>
    </head>
    <body>

// for naming and to give a character HP 
        <form action="/characters" method="POST">
            @csrf 
            <x-text-input slug="name" label="Name Your Character"/>
            <x-text-input slug="HP" label="Hit Point" type="number"/>
            <x-text-input slug="base_str" label="Strength" type="number" value="10"/>
            <x-text-input slug="base_dex" label="Dexterity" type="number" value="10"/>
            <x-text-input slug="base_con" label="Constitution" type="number" value="10"/>
            <x-text-input slug="base_int" label="Intelligence" type="number" value="10"/>
            <x-text-input slug="base_wis" label="Wisdom" type="number" value="10"/>
            <x-text-input slug="base_cha" label="Charisma" type="number" value="10"/>
            <div>
                <label for="character-class">Standard class</label>
                <div class="select">
                    <select id="character-class" name="character-class">
                        @foreach ($character_classes as $character_class)
                        <option value="{{$character_class->id}}">{{$character_class->name}}</option>
                        @endforeach
                    </select></div>
                    
                    // for picking a race
                    <label for="race">Race</label>
                <div class="select">
                    <select id="character-race" name="character-race">
                    @foreach ($character_races as $character_race)
                    <option value="{{$character_race->id}}">{{$character_race->race}}</option>
                    @endforeach
                    </select></div>
            </div>
            
            
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
