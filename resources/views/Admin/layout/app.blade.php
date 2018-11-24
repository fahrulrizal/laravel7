<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
	<meta  name="viewport" content="width=devices-width, initial-scale-1">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div id="wrapper">
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#button-id">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">LKS Provinsi Kalimantan Timur</a>
				</div>

			<div class="collapse navbar-collapse" id="button-id">
				@include('Admin.layout.sidebar')
			<ul class="nav navbar-nav pull-right">
				<li><a href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Keluar</a></li>
			</ul>

      <form id="form-logout" action="{{ route('logout') }}" method="post">
        @csrf
      </form>

			</div>
		</nav>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h3>@yield('title')
          </h3>
					@yield('content')
				</div>
			</div>
		</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js') }} "></script>
<script>
	$(document).ready( function() {
		$('#myTable').DataTable ({
		          'scrollX'     : true,
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : false,
              'autoWidth'   : false,

              "language": {
             "paginate": {
            "previous": "Sebelumnya",
            "next" :"Selanjutnya"
    }
  }

		});
	});
</script>
</body>
</html>