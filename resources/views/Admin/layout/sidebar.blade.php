<div class="nav navbar-nav side-nav">
	<li class="{{ Request::segment(2) == 'dashboard' ? 'active' : '' }}" ><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>

	<li class="{{ Request::segment(2) == 'berita' ? 'active' : '' }}"><a href="{{ route('berita.index') }}">Berita</a></li>

	<li class=" {{ Request::segment(2) == 'kategori' ? 'active' : '' }}"><a href="{{ route('kategori.index') }}">Kategori</a></li>

</div>	