<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Titan's Catering</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/header.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="main-wrapper">
		
            @include('layouts.inc.header')
            
                @yield('content')
    
            @include('layouts.inc.footer')
    
        </div>
    </body>
</html>
