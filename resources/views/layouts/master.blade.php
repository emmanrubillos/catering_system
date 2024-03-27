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

    {{--? animation scroll--}}
    <script src="{{ asset('assets/plugins/links/aos.js') }}"></script>

    

	{{--? Core CSS --}}
	<link href="{{ asset('css/header.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/about.css') }}" rel="stylesheet">
	<link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/links/aos.css') }}" rel="stylesheet">
    
   

</head>

<body class="flex flex-col w-full h-screen overflow-x-hidden">

	{{--! Loading Screen --}}
	{{-- <div class="loading-screen">
		<div class="spinner"></div>
	</div> --}}




	@yield('content')





	{{--? Tailwind CSS Connection --}}
	<script src="{{ mix('js/app.js') }}"></script>

	<!--? Include Flowbite JS -->
	<script src="{{ asset('js/flowbite.min.js') }}"></script>

	{{--? Calendar JS File --}}
	<script src="{{ asset('js/calendar.js') }}" defer></script>
   
</body>

</html>
