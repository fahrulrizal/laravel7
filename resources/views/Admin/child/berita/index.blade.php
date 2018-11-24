@extends('Admin.layout.app')

@section('title', 'Berita!')

@section('content')

	<table id="myTable" class="table table-striped table-bordered">
       <a class="btn btn-success pull-left" href="{{ route('berita.create') }}">Tambah +</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Katerangan</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($aparatur as $a)
        	<tr>
        		<td>{{ $a->id }}</td>
        		<td>{{ $a->}}</td>>
        	</tr>
        	@endforeach
        </tbody>

@endsection