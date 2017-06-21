<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FilmePlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $playlists = Playlist::all();
        $filmes = Filme::all();
        return view ('playlists.add', compact ('filmes' , 'playlists'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $playlist = Playlist::find($request->playlist_id); 

        $filme = Filme::find($request->filme_id);

        $playlist->filme()->attach($request->filme_id);
        
        return redirect('playlists'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show (Playlist $playlist)
    {
        $playlists = DB::table('filme_playlist')
                ->where('playlist_id', '=', $playlist->id)
                ->get();
        $filmes = Filme::all();
        $playlist = Playlist::find($playlists);
        return view('playlists.show', compact('filmes', 'playlist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        //
    }
}
