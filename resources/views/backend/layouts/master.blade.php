<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Admin</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{url('assets/backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/backend/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{url('assets/backend/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{url('assets/backend/assets/vendor/chartist/css/chartist-custom.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{url('assets/backend/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{url('assets/backend/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{url('assets/backend/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{url('assets/backend/assets/img/favicon.png')}}">
	@yield('header')

</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('backend.layouts.partials.navbar')
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		@include('backend.layouts.partials.sidebar')
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		
		@yield('content')
				
			<!-- END MAIN CONTENT -->
		
		<!-- END MAIN -->
		<div class="clearfix"></div>
		
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{url('assets/backend/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{url('assets/backend/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/backend/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{url('assets/backend/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{url('assets/backend/assets/vendor/chartist/js/chartist.min.js')}}"></script>
	<script src="{{url('assets/backend/assets/scripts/klorofil-common.js')}}"></script>
	
	@yield('footer')
</body>

</html>
