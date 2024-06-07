@extends('layouts.app')

@section('title')
Tambah Data Artist | Soul Admin
@endsection

@section('content')
<h3>Input Artists</h3>
<div class="form-login">
	<form action="{{ url('/artist/store') }}" method="post" enctype="multipart/form-data">
    @csrf
        <label for="nama">Nama</label>
		<input class="input" type="text" name="nama" id="nama" placeholder="nama" value="{{ old('nama') }}" />
        @error('nama')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror
        
		<label for="lahir">Tanggal Lahir</label>
		<input class="input" type="date" name="lahir" id="lahir" placeholder="lahir" value="{{ old('lahir') }}" />
        @error('lahir')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

		<label for="bangsa">Kebangsaan</label>
		<input class="input" type="text" name="bangsa" id="bangsa" placeholder="bangsa" value="{{ old('bangsa') }}" />
        @error('bangsa')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

		<label for="gaya">Gaya Seni</label>
		<input class="input" type="text" name="gaya" id="gaya" placeholder="gaya" value="{{ old('gaya') }}" />
        @error('gaya')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

        <label for="bio">Biografi</label>
		<textarea class="input" name="bio" id="bio" placeholder="bio">{{ old('bio') }}</textarea>
        @error('bio')
        <p style="font-size: 10px; color: red">{{ $message }}</p>
        @enderror

		<button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
			Simpan
		</button>
	</form>
</div>
@endsection