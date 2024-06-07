@extends('layouts.app')

@section('title')
Hapus Data Artist | Soul Admin
@endsection

@section('content')
<h3>Hapus Artist</h3>
	   <div class="form-login">
       <h4>Anda Yakin Ingin Menghapus Data Artist ?</h4>
       <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
    <a href={{ url('/artist/destroy/' . $artist->id_artist ) }}>
      Yes
    </a>
  </button>
  <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
    <a href="/artist">
      No
    </a>
  </button>
</div>
@endsection
