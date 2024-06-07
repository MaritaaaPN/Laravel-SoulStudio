@extends('layouts.app')

@section('title')
Tambah Data Artwork | Soul Admin
@endsection

@section('content')
<h3>Input Artworks</h3>
<div class="form-login">
	<form action="{{ url('/artwork/store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <label for="judul">Judul</label>
		<input class="input" type="text" name="judul" id="judul" placeholder="judul" value="{{ old('judul') }}" />
        @error('judul')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror
        
		<label for="artis">Nama Artist</label>
		<input class="input" type="text" name="artis" id="artis" placeholder="artis" value="{{ old('artis') }}" />
        @error('artis')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

		<label for="kategori">Kategori</label>
		<input class="input" type="text" name="kategori" id="kategori" placeholder="kategori" value="{{ old('kategori') }}" />
        @error('kategori')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="deskripsi">Deskripsi</label>
		<textarea class="input" name="deskripsi" id="deskripsi" placeholder="deskripsi">{{ old('deskripsi') }}</textarea>
        @error('deskripsi')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="foto">Foto Karya Seni</label>
        <input type="file" name="foto" id="foto" />
        @error('foto')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

		<button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
			Simpan
		</button>
	</form>
</div>
@endsection