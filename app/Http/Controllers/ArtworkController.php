<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artworks = Artwork::all();
        return view('artworks.artworks', compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artworks.artworks-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'judul' => 'required',
            'artis' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        $foto = $request->file('foto');
        $nama_foto = time() . '_' . $foto->getClientOriginalName();
        $tujuan_upload = 'img_artworks';
        $foto->move($tujuan_upload, $nama_foto);

        Artwork::create([
            'foto' => $nama_foto,
            'judul' => $request->judul,
            'artis' => $request->artis,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/artwork');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_artwork)
    {
        $artwork = artwork::find($id_artwork);
        return view('artworks.artworks-edit', compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_artwork)
    {
        $request->validate([
            //'foto' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'judul' => 'required',
            'artis' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        $artworks = Artwork::find($id_artwork);

        // if($request->hasFile('foto')){

        //     File::delete('img_artworks/'.$artwork->foto);
        //     $foto = $request->file('foto');
        //     $nama_foto = time() . '_' . $foto->getClientOriginalName();
        //     $tujuan_upload = 'img_artworks';
        //     $foto->move($tujuan_upload, $nama_foto);
        //     $artwork->foto = $nama_foto;
        // }

        $artworks->update([
            'judul' => $request->judul,
            'artis' => $request->artis,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/artwork');
    }

    public function delete($id_artwork)
    {
        $artwork = Artwork::find($id_artwork);
        return view('artworks.artworks-hapus', compact('artwork'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_artwork)
    {
        $artwork = Artwork::find($id_artwork);
        File::delete('img_artworks/'.$artwork->foto);
        $artwork->delete();
        return redirect('/artwork');
    }

    public function cetak()
    {
        $artwork = Artwork::all();
        $pdf = Pdf::loadview('artworks.artworks-cetak', compact('artwork'));
        return $pdf->download('laporan-cetak-data-artwork.pdf');
    }
}
