<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <link rel="shortcut icon" href="{{asset('assets/img/logo.ico')}}" type="image/x-icon"> --}}
	<link rel="SHORTCUT ICON" href="/img/s-logo.png" type="image/x-icon">
    <title>Bizkhmer</title>
    
    <!-- Bootstrap -->
	{{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> --}}
	<!-- Template styles-->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" scoped>
	<!-- Responsive styles-->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<!-- Colorbox -->
    <link rel="stylesheet" href="{{ asset('assets/css/colorbox.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div id="app" class="body-inner">
        <app-main></app-main>        
    </div> 
</body>

    <script src="{{ asset('js/app.js') }}"></script>

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- Bootstrap jQuery -->
	{{-- <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> --}}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<!-- Counter -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ asset('assets/js/waypoints.min.js') }}"></script>
	<!-- Color box -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.colorbox.js') }}"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{ asset('assets/js/smoothscroll.js') }}"></script>


	<!-- Template custom -->
	<script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>

</html>