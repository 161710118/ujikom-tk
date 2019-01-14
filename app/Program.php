<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'Programs';
    protected $fillable = ['judul','deskripsi','gambar','nama_penulis','kategori_id','slug'];
    public $timestamps = true;

    public function Kategori()
    {
    	return $this->belongsTo('App\Kategori','kategori_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}