@extends('Admin.layout.app')

@section('title', 'Tambah Berita')

@section('content')
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{ route('berita.update', $berita->id)}}" method="post" enctype="multipart/form-data">
					@method('put')
					@csrf
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori_id" class="form-control">
							@foreach($kategori as $k)
							<option value="{{$k->id}}">{{ $k->nama_kategori }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Judul Berita</label>
						<input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita" value="{{ $berita->judul_berita }}">
					</div>

					<div class="form-group">
						<label>Keterangan</label>
						<textarea name="keterangan" cols="30" rows="10" placeholder="keterangan" class="form-control" value="{{ $berita->keterangan }}">{{ $berita->keterangan }}</textarea>
					</div>

					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" name="tanggal_berita" class="form-control" value="{{$berita->tanggal_berita}}">
					</div>

					<div class="form-group">
						<label>Gambar</label>
						<input type="file" name="foto"><br>
						<img src="{{asset('storage/' . $berita->foto) }}" width="100" height="100"> 
					</div>

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection