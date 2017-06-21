<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    public function genero()
    {
        return $this->belongsTo('App\Genero');
    }
    public function playlists()
    {
        return $this->belongsToMany('App\Playlist');
    }
}
