<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Admin | Titan's Catering</title>

	<link rel="stylesheet" href="{{ asset('assets/plugins/links/datatables.min.css') }}">

	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/feathericon.min.css') }}">
	{{-- <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css"> --}}
	{{-- <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}"> --}}
	
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> </head>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">
	
	<link rel="stylesheet" href="{{ asset('assets/plugins/links/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css') }}">
    
	<script	src="{{ asset('assets/plugins/links/axios.min.js') }}"></script>
	<script	src="{{ asset('assets/plugins/links/sweetalert2@11.js') }}"></script>
	
	<link rel="stylesheet" href="{{ asset('assets/plugins/links/dataTables.bootstrap5.css') }}">
	
	<link href="{{ asset('css/admin.css') }}" rel="stylesheet">

	<script	src="{{ asset('assets/plugins/links/jquery-3.7.1.js') }}"></script>
	<script	src="{{ asset('assets/plugins/links/bootstrap.bundle.min.js') }}"></script>
	<script	src="{{ asset('assets/plugins/links/dataTables.js') }}"></script>


    <style>
	a {
		text-decoration: none;
	}
	.new-sidebar {
		position: fixed;
		top: 0;
		left: -200px; /* Initially hide the sidebar off-screen */
		width: 200px;
		height: 100%;
		background-color: #333;
		transition: left 0.3s ease; /* Add transition effect for smoother animation */
	}


	.new-sidebar.active {
		left: 0; /* Display the sidebar when it has the 'active' class */
	}


	.new-sidebar-inner {
		padding: 20px;
	}


	.new-sidebar ul {
		list-style: none;
		padding: 0;
		margin: 0;
	}


	.new-sidebar ul li {
		margin-bottom: 10px;
	}


	.new-sidebar ul li a {
		color: #fff;
		text-decoration: none;
	}


	/* Your existing CSS styles for the hamburger menu icon */
	.hamburger-menu {
		display: none; /* Hide the hamburger menu icon by default */
	}

	@media (max-width: 991.98px) {
		.hamburger-menu {
			display: flex; /* Show the hamburger menu icon when viewport width is below 992px */
			width: 30px; /* Adjust the width and height as needed */
			height: 20px;
			flex-direction: column;
			justify-content: space-between;
			cursor: pointer;
			position: absolute; /* Position the hamburger menu icon absolutely within the header */
			top: 20px; /* Adjust the top position as needed */
			left: 20px; /* Adjust the left position as needed */
		}

		.fe-text-align-left {
			font-size: 40px;
		}
	}

	
	</style>

	{{-- message toastr --}}
	
	


</head>

<body>

	<div class="main-wrapper">


        @yield('content')

	</div>
	
	{{-- TinyMCE Script --}}
	{{-- <script src="https://cdn.datatables.net/v/dt/dt-2.0.1/datatables.min.js"></script> --}}
	{{-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
	{{-- <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/js/chart.morris.js') }}"></script> --}}
	{{-- <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}

	<script src="{{ asset('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/toastr.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/moment.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/script.js') }}"></script>
	<script src="{{ asset('assets/js/moment.min.js') }}"></script>
	
	<script	src="{{ asset('assets/plugins/links/popper.min.js') }}" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script	src="{{ asset('assets/plugins/links/jquery-3.7.1.min.js') }}"></script>


</body>
	
</html>

