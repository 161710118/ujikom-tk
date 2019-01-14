<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';
    protected $fillable = ['nama','gambar','kategori_id'];
    public $timestamps = true;

 public function Kategorifasilitas()
    {
        return $this->belongsTo('App\Kategorifasilitas','kategori_id');
    }
}
