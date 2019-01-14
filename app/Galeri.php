<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $fillable = ['gambar','nama','kategori_id'];
    public $timestamps = true;

    public function Kategorigaleri()
    {
        return $this->belongsTo('App\Kategorigaleri','kategori_id');
    }
}
