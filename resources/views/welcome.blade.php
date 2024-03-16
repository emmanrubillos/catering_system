<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Titan's Catering</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/header.css') }}" rel="stylesheet">
        <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        {{--? fontAwesome --}}
        <script src="https://kit.fontawesome.com/ee3372abc2.js" crossorigin="anonymous"></script>
                

    </head>
    <body class="flex flex-col">
        
           
        @include('layouts.pages_._home.home')

        <script src="{{ mix('js/app.js') }}"></script>
        <!-- Include Flowbite JS -->
        <script src="{{ asset('js/flowbite.min.js') }}"></script>

    </body>

</html>
