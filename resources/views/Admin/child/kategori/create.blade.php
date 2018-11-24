@extends('Admin.layout.app')

@section('title', 'Tambah Kategori')

@section('content')

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="{{ route('kategori.store') }}" method="post">
					@csrf
					<div class="form-group">
						<label>Nama Kategori</label>
						<input type="text" name="nama_kategori" placeholder="Nama Kategori" class="form-control">
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