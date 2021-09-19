<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
Add a entry for a new race
        <title><Add/title>
    </head>
    <body>
        
    <h1>Character Inventory</h1>

    @foreach ($character->items as $item)
        <li>
            {{ $item->name }}
            <form action="{{ route('characters.delete') }}" method="DELETE">
                        @csrf
                    <input type="submit" value="Remove">
            </form>
        </li>
    @endforeach

</html>
