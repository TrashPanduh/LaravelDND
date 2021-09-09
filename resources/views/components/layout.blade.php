<html>
    <head>
        <title>{{ $title ?? 'DND' }}</title>
        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">    
    </head>
    <body>
        @if (session('message'))
            <div class="bg-green-200 p-2">{{ session('message') }}</div>
        @endif
        
        {{ $slot }}
    </body>
</html>