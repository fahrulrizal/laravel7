<div id="fixed">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Berita</h2>
				<hr>
			</div>
		</div>

		<div class="row">
			@foreach($berita as $b)
		<div class="col-md-4">
			<div class="thumbnail">
				<a href="#">
					<img src="{{asset('storage/'. $b->foto) }}">
				</a>
				<div class="caption">
					<h3>{{ $b->judul_berita }}</h3>
					<p>{{ str_limit($b->keterangan) }}</p>
					<a href="{{ url('beritaselengkapnya', $b->id) }}" class="btn btn-primary">Selengkapnya</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
</div>