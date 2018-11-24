@extends('Web.layout.app')

@section('content')

<div class="padding" id="testimoni">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset('storage/'. $berita->foto)}}">
			</div>
			<div class="col-md-6 text-center">
				<h3>{{ $berita->judul_berita }}</h3>
				<p>{{ $berita->keterangan }}</p>
				<a href="{{ url('/')}}" class="btn btn-primary">Kembali</a>
			</div>
		</div>
	</div>
</div>

@endsection