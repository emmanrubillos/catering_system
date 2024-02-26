<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Titan's Catering</title>
<<<<<<< HEAD

<<<<<<< HEAD


	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/header.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
=======

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/header.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet">

>>>>>>> 860bdbcd3aa94e659bed4edadb38155e0d2628d6
=======
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/header.css') }}" rel="stylesheet">
	<link href="{{ asset('css/footer.css') }}" rel="stylesheet">

>>>>>>> e52c72dc86f34502c2d93805e998c3ff724f5424
</head>

<body>

	<div class="main-wrapper">
		
		@include('layouts.inc.header')
		
        	@yield('content')

		@include('layouts.inc.footer')

	</div>
	

</body>

</html>