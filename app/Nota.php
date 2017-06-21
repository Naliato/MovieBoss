<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
     public function playlist()
    {
        return $this->belongsTo('App\Playlist');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
