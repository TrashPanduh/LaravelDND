<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Characters</title>
    </head>
    <body>
    <ul>
        @foreach ($character->name)
            
        @endforeach

    </ul>


    </body>
</html>
