<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
Add a entry for a new race
        <title><Add/title>
    </head>
    <body>
        
    <h1>race</h1>
    <form action="/races" method="POST">
    <label for="race">Race</label>
    <input type="text" id="name" name="name"><br>
    <input type="submit" value="Submit">
        </form></body>
</html>
