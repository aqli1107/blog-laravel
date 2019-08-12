<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = ['foto','judul','deskripsi','pembuat','kategori'];

    public function categorie()
    {
        return $this->belongsTo('App\Categorie','kategori');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tags');
    }

}
