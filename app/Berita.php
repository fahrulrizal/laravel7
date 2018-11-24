<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = ['kategori_id', 'judul_berita', 'keterangan' , 'tanggal_berita', 'foto'];

    public function Kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }
}
