@extends('layouts.app')

@section('title')
Hapus Data Artwork | Soul Admin
@endsection

@section('content')
<h3>Hapus Artwork</h3>
	<div class="form-login">
    <h4>Anda Yakin Ingin Menghapus Data Artwork ?</h4>
    <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
       <a href={{ url('/artwork/destroy/' . $artwork->id_artwork ) }}>
        Yes
       </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/artwork">
      No
    </a>
  </button>
</div>
@endsection
