<?php

namespace App\Http\Controllers;

use App\Playlist;
use App\Filme;
use App\Genero;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = Filme::with('playlists')->get();
        $filmes = Filme::with('genero')->get(); 
        return view('filmes.index', compact('filmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all(); 
        return view('filmes.create', compact ('generos'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filme = new Filme();
        $filme->titulo = $request->titulo;
        $filme->ano = $request->ano;
        $filme->diretor = $request->diretor;
        $filme->genero_id = $request->genero;

        $filme->save();

        return redirect('filmes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function show(Filme $filme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filme)
    {
        $filmes = Filme::find($filme);
        return view('filmes.edit', compact('filmes'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filme $filme)
    {
        $filme->titulo = $request->titulo;
        $filme->diretor = $request->diretor;

        $filme->save();

        return redirect('/filmes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect('/filmes');
    }
}

