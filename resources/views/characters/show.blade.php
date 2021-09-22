<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Character</title>
    </head>
    <body>
        <h1>Name</h1>
        {{ $character->name }}

        

        <h1>Race</h1>
        <ul>
        {{ $character->race->subrace }}
        </ul>
        <h1>Armor Class</h1>
        <ul>
        {{ $character->ArmorClass }}
        </ul>
        <ul>

        <h1>Speed:</h1>
        {{ $character->race->walking_speed }}
        </ul>

        <h1>Hit Points</h1>
        {{ $character->Hpmodifier }}
        
        <h1>Classes</h1>
        <ul>
            @foreach ($character->characterClasses as $characterClass)
                <li>
                    {{ $characterClass->name }}
                </li>

            @endforeach
        </ul>
        
        <h1>Stats</h1>
        <ul>
            <li>STR: {{$character->str}} ({{ $character->str_modifier }})</li>
            <li>DEX: {{$character->dex}} ({{ $character->dex_modifier }})</li>
            <li>CON: {{$character->con}} ({{ $character->con_modifier }})</li>
            <li>INT: {{$character->int}} ({{ $character->int_modifier }})</li>
            <li>WIS: {{$character->wis}} ({{ $character->wis_modifier }})</li>
            <li>CHA: {{$character->cha}} ({{ $character->cha_modifier }})</li>
        </ul>

        <h1>Skills</h1>
        <ul>
                <li>Acrobatics (Dex): {{ $character->skillModifier('acrobatics') }}</li>
                <li>Animal Handling (Wis): {{ $character->skillModifier('animal_handling') }}</li>
                <li>Arcana: {{ $character->skillModifier('arcana') }}</li>
                <li>Athletics: {{ $character->skillModifier('athletics') }}</li>
                <li>Deception: {{ $character->skillModifier('deception') }}</li>
                <li>History: {{ $character->skillModifier('history') }}</li>
                <li>Insights: {{ $character->skillModifier('insight') }}</li>
                <li>Intimidation: {{ $character->skillModifier('intimidation') }}</li>
                <li>Investion: {{ $character->skillModifier('investigation') }}</li>
                <li>Medicine: {{ $character->skillModifier('medicine') }}</li>
                <li>Nature: {{ $character->skillModifier('nature') }}</li>
                <li>Perception: {{ $character->skillModifier('perception') }}</li>
                <li>Performance: {{ $character->skillModifier('performance') }}</li>
                <li>Persuasion: {{ $character->skillModifier('persuasion') }}</li>
                <li>Religion: {{ $character->skillModifier('religion') }}</li>
                <li>Sleight of Hand: {{ $character->skillModifier('sleight_of_hand') }}</li>
                <li>Stealth: {{ $character->skillModifier('stealth') }}</li>
                <li>Survival: {{ $character->skillModifier('survival') }}</li>
        </ul>
        <h1>Items</h1>
        
        // add items here

        <br>
        <ul>
            @foreach ($groupedItems as $itemName => $count)
                <li>
                    
                    {{ $itemName }} @if($count > 1)x{{ $count }}@endif

                    @if($count > 1)
                        <form action="{{ route('characters.items.removeOne', [$character->id, $itemName]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remove One">
                        </form>
                        <form action="{{ route('characters.items.removeAll', [$character->id, $itemName]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remove All">
                        </form>
                    @else
                        <button>Remove</button>
                    @endif
                </li>
            @endforeach
        </ul>
        Capacity:
        <br>
        {{ $inventory }} / {{ $capacity }}
            
        <br>
        <a href="{{ route('characters.items.create', ['character' => $character->id]) }}" >+ Add New Item</a>
    </body>
</html>
