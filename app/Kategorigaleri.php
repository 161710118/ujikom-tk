<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorigaleri extends Model
{
     protected $fillable = ['nama_kategori'];
    public $timestamps = true;


    public function galeri()
    {
        return $this->hasMany('App\Galeri', 'kategori_id');
    }
}
