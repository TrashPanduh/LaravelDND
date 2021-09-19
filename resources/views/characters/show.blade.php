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
           {{ $character->race->race }}
        </ul>
        
        <h1>Hit Points</h1>
        {{ $character->HP }}
        
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
            <li>STR: {{$character->str}}</li>
            <li>DEX: {{$character->dex}}</li>
            <li>CON: {{$character->con}}</li>
            <li>INT: {{$character->int}}</li>
            <li>WIS: {{$character->wis}}</li>
            <li>CHA: {{$character->cha}}</li>
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
