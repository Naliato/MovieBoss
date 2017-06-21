<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function filme()
    {
       return $this->belongsToMany('App\Filme');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function nota()
    {
        return $this->belongsTo('App\Nota');
    }
}
