<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Depan</title>
	<meta name="viewport" content="width=devices-width, initial-scale-1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/web.css') }}">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  data-target="#navbar-collapse-main">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">LKS Provinsi Kalimantan Timur</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse-main">
				<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="page-scroll">Beranda</a></li>
				<li><a href="#tentangkami" class="page-scroll">Tentang Kami</a></li>
				<li><a href="#fixed" class="page-scroll">Berita</a></li>
				@if(Auth::check())
				<li><a href="{{url('admin/dashboard')}}"><b>Admin, Dashboard</b></a></li>
				<li><a href="/home" onclick="event.preventDefault(); document.getElementById('form-logout').submit();"><b>{{Auth::user()->name}} (Logout)</b></a></li>
				@else
				<li><a href="{{route('login')}}"><b>Login</b></a></li>
				@endif	
				</ul>
				<form id="form-logout" action="{{route('logout')}}" method="post">
					@csrf
				</form>
			</div>
		</div>
	</nav>


@yield('content')


<footer>
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-4">
				<img src="{{ asset('img/LogoProvinsiKalimantanTimur.png') }}" class="icon2">
				<h3>LKS Provinsi Kaliamantan Timur</h3>
			</div>
			<div class="col-md-4">
				<h3>Sosial</h3>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-facebook"></i>
				<i class="fa fa-youtube"></i>
				<i class="fa fa-instagram"></i>
				<i class="fa fa-instagram"></i>

			</div>
			<div class="col-md-4">
				<img src="{{asset('img/LKS.png')}}" class="icon">
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.easing.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>


</body>
</html>