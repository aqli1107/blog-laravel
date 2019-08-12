<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    public function artikels(){
        return $this->belongsToMany('App/Artikel');
    }
}
