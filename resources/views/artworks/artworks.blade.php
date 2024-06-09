@extends('layouts.app')

@section('title')
Artworks | Soul Admin
@endsection

@section('content')
<h3>Artworks</h3>
<button type="button" class="btn btn-tambah">
	<a href="/artwork/tambah">Tambah Data</a>
</button>
<button type="button" class="btn btn-tambah">
        <a href="/artwork/cetak">Cetak Data</a>
</button>
<table class="table-data">
<thead>
<thead>
	<tr>
		<th scope="col" style="width: 20%">Foto Artwork</th>
        <th scope="col" style="width: 15%">Judul</th>
		<th scope="col" style="width: 10%">Artist</th>
        <th scope="col" style="width: 10%">Kategori</th>
		<th scope="col" style="width: 25%">Deskripsi</th>
		<th scope="col" style="width: 25%">Action</th>
	</tr>
</thead>
</thead>
<tbody>
    @forelse ($artworks as $artworks)
    <tr>
        <td><img src="{{ asset('img_artworks/' . $artworks->foto)  }}" alt="" width="300px"></td>
        <td>{{ $artworks->judul }}</td>
        <td>{{ $artworks->artis}}</td>
        <td>{{ $artworks->kategori }}</td>
        <td>{{ $artworks->deskripsi }}</td>
        <td>
            <a class='btn-edit' href="/artwork/edit/{{ $artworks->id_artwork }}">Edit</a>
            |
            <a class='btn-delete' href="/artwork/hapus/{{ $artworks->id_artwork }}">Hapus</a>
        </td>
    </tr>
    @empty
    <tr>
      <td colspan="6" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection

