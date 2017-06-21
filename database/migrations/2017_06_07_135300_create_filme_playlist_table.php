<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmePlaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filme_playlist', function (Blueprint $table) {
            $table->integer('filme_id')->unsigned()->nullable();
            $table->foreign('filme_id')->references('id')->on('filmes');
            
            $table->integer('playlist_id')->unsigned()->nullable();
            $table->foreign('playlist_id')->references('id')->on('playlists');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filme_playlist');
    }
}
