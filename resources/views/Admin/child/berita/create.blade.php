@extends('Admin.layout.app')

@section('title', 'Tambah Berita')

@section('content')
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{ route('berita.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group {{$errors->has('kategori_id') ? 'has-error has-feedback' : '' }}">
						<label>Kategori</label>
						<select name="kategori_id" class="form-control">
							<option value="">--Pilih Kategori -- </option>
							@foreach($kategori as $k)
							<option value="{{$k->id}}">{{ $k->nama_kategori }}</option>
							@endforeach
						</select>
						@if($errors->has('kategori_id'))
							@foreach($errors->get('kategori_id') as $pesan)
							<small class="text-danger">{{ $pesan }}</small>
							@endforeach
						@endif
					</div>
				<div class="form-group {{$errors->has('judul_berita') ? 'has-error has-feedback' : ''}}">
						<label>Judul Berita</label>
						<input type="text" name="judul_berita" class="form-control" placeholder="Judul Berita">
						@if($errors->has('judul_berita'))
							@foreach($errors->get('judul_berita') as $pesan)
							<small class="text-danger">{{ $pesan }}</small>
							@endforeach
						@endif
					</div>

					<div class="form-group  {{$errors->has('keterangan') ? 'has-error has-feedback' : ''}}">
						<label>Keterangan</label>
						<textarea name="keterangan" cols="30" rows="10" placeholder="keterangan" class="form-control"></textarea>
						@if($errors->has('keterangan'))
							@foreach($errors->get('keterangan') as $pesan)
							<small class="text-danger">{{ $pesan }}</small>
							@endforeach
						@endif
					</div>

					<div class="form-group {{$errors->has('tanggal_berita') ? 'has-error has-feedback' : ''}}">
						<label>Tanggal</label>
						<input type="date" name="tanggal_berita" class="form-control">
						@if($errors->has('tanggal_berita'))
							@foreach($errors->get('tanggal_berita') as $pesan)
							<small class="text-danger">{{ $pesan }}</small>
							@endforeach
						@endif
					</div>

					<div class="form-group {{$errors->has('foto') ? 'has-error has-feedback' : ''}}">
						<label>Gambar</label>
						<input type="file" name="foto">
						@if($errors->has('foto'))
							@foreach($errors->get('foto') as $pesan)
							<small class="text-danger">{{ $pesan }}</small>
							@endforeach
						@endif
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