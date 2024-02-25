<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Titan's Catering</title>

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/header.css') }}" rel="stylesheet">
</head>

<body>

	<div class="main-wrapper">
		
		@include('layouts.inc.header')
		
        	@yield('content')

		@include('layouts.inc.footer')

	</div>
	

</body>

</html>