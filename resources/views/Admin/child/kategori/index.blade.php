@extends('Admin.layout.app')

@section('title', 'Kategori')

@section('content')
	<table id="myTable" class="table table-striped table-bordered">
		<a href="{{ route('kategori.create') }}" class="btn btn-success">Tambah + </a>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		@foreach($kategori as $k)
			<tr>
				<td>{{ $k->id }}</td>
				<td>{{ $k->nama_kategori }}</td>
				<td>
					<form class="btn btn-success">
					<a href="{{ route('kategori.edit', $k->id ) }}" class="btn btn-success">Ubah</a>
					</form>
					-
					<form action="{{ route('kategori.destroy', $k->id) }}" method="post" class="btn btn-danger">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger">Hapus</button>
					</form>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection