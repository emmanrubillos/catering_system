<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	
	<title>Titan's Catering</title>
	
	{{--? fontAwesome --}}
	<script src="https://kit.fontawesome.com/ee3372abc2.js" crossorigin="anonymous"></script>

	{{--? tailwill CSS --}}
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	
	{{--? Core CSS --}}
	<link href="{{ asset('css/header.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/about.css') }}" rel="stylesheet">
	
</head>

<body>

	@include('layouts.inc.header')
	
	<main class="wrapper h-[420rem] overflow-x-hidden">
		
		
        	@yield('content')


	</main>
	
	@include('layouts.inc.footer')
	
</body>

</html>
