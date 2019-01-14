<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorifasilitas extends Model
{
    protected $fillable = ['nama_kategori'];
    public $timestamps = true;


    public function fasilitas()
    {
        return $this->hasMany('App\Fasilitas', 'kategori_id');
    }
}
