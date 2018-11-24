@extends('Web.layout.app')

@section('content')

	<div id="home">
		<div class="landing-text">
			<h1>Boostrap</h1>
			<h3>Boostrap Keren Banget Dan Tidak Capek Tangan dan Cepat Aman</h3>
			<a href="#tentangkami" class="btn btn-default btn-lg page-scroll">Tentang Kami</a>
		</div>
	</div>

	<div class="padding" id="tentangkami">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="{{ asset('img/devices.png') }}">
				</div>
				<div class="col-md-6">
					<h3>All About Css And Boostrap</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam unde quos nemo, est facilis! Tempore, fugiat, delectus repellendus hic quasi beatae cum mollitia iste impedit, nobis nesciunt architecto at adipisci?</p>
				</div>
			</div>
		</div>
	</div>

	<div class="padding" id="profil">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="{{ asset('img/css3.png') }}">
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h3>All About Css And Boostrap</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam unde quos nemo, est facilis! Tempore, fugiat, delectus repellendus hic quasi beatae cum mollitia iste impedit, nobis nesciunt architecto at adipisci?</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="{{ asset('img/css3.png') }}">
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h3>All About Css And Boostrap</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam unde quos nemo, est facilis! Tempore, fugiat, delectus repellendus hic quasi beatae cum mollitia iste impedit, nobis nesciunt architecto at adipisci?</p>
				</div>
			</div>
		</div>
	</div>
	
	@include('Web.child._berita')

	@include('Web.child._kategori')

@endsection