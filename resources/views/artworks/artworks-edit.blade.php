@extends('layouts.app')

@section('title')
Edit Data Artwork | Soul Admin
@endsection

@section('content')
<h3>Edit Artwork</h3>
<div class="form-login">
	<form action="{{ url('/artwork/update/' . $artwork->id_artwork) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
        <label for="judul">Judul</label>
		<input class="input" type="text" name="judul" id="judul" placeholder="judul" value="{{ old('judul', $artwork->judul) }}" />
        @error('judul')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror
        
		<label for="artis">Nama Artist</label>
		<input class="input" type="text" name="artis" id="artis" placeholder="artis" value="{{ old('artis', $artwork->artis) }}" />
        @error('artis')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

		<label for="kategori">Kategori</label>
		<input class="input" type="text" name="kategori" id="kategori" placeholder="kategori" value="{{ old('kategori', $artwork->kategori) }}" />
        @error('kategori')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="deskripsi">Deskripsi</label>
		<textarea class="input" name="deskripsi" id="deskripsi" placeholder="deskripsi">{{ old('deskripsi', $artwork->deskripsi) }}</textarea>
        @error('deskripsi')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="foto">Foto Karya Seni</label>
        <img src="{{ asset('img_artworks/' . $artwork->foto) }}" alt="" width="200px">
        <input type="file" name="foto" id="foto" />
        @error('foto')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
            Edit
        </button>
    </form>
</div>
@endsection