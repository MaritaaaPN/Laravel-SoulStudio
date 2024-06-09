@extends('layouts.app')

@section('title')
Artists | Soul Admin
@endsection

@section('content')
<h3>Artists</h3>
<button type="button" class="btn btn-tambah">
	<a href="/artist/tambah">Tambah Data</a>
</button>
<button type="button" class="btn btn-tambah">
        <a href="/artist/cetak">Cetak Data</a>
</button>
<table class="table-data">
<thead>
	<tr>
		<th scope="col" style="width: 15%">Nama</th>
    <th scope="col" style="width: 15%">Tanggal Lahir</th>
		<th scope="col" style="width: 10%">Kebangsaan</th>
		<th scope="col" style="width: 15%">Gaya Seni</th>
    <th scope="col" style="width: 25%">Biografi</th>
		<th scope="col" style="width: 20%">Action</th>
	</tr>
</thead>
<tbody>
    @forelse ($artists as $artists)
    <tr>
      <td>{{ $artists->nama }}</td>
      <td>{{ $artists->lahir}}</td>
      <td>{{ $artists->bangsa }}</td>
      <td>{{ $artists->gaya }}</td>
      <td>{{ $artists->bio }}</td>
      <td>
        <a class='btn-edit' href="/artist/edit/{{ $artists->id_artist }}">Edit</a>
        |
        <a class='btn-delete' href="/artist/hapus/{{ $artists->id_artist }}">Hapus</a>
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

