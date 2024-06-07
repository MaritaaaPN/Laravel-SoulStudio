<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return view('artists.artists', compact('artists'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artists.artists-entry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'lahir' => 'required',
            'bangsa' => 'required',
            'gaya' => 'required',
            'bio' => 'required',
        ]);

        Artist::create([
            'nama' => $request->nama,
            'lahir' => $request->lahir,
            'bangsa' => $request->bangsa,
            'gaya' => $request->gaya,
            'bio' => $request->bio,
        ]);

        return redirect('/artist');

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
    public function edit($id_artist)
    {
        $artist = artist::find($id_artist);
        return view('artists.artists-edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_artist)
    {
        $request->validate([
            'nama' => 'required',
            'lahir' => 'required',
            'bangsa' => 'required',
            'gaya' => 'required',
            'bio' => 'required',
        ]);

        $artist = Artist::find($id_artist);

        $artist->update([
            'nama' => $request->nama,
            'lahir' => $request->lahir,
            'bangsa' => $request->bangsa,
            'gaya' => $request->gaya,
            'bio' => $request->bio,
        ]);

        return redirect('/artist');
    }

    public function delete($id_artist)
    {
        $artist = Artist::find($id_artist);
        return view('artists.artists-hapus', compact('artist'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_artist)
    {
        $artist = Artist::find($id_artist);
        $artist->delete();
        return redirect('/artist');
    }
}
