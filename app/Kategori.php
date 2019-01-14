<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'Kategoris';
    protected $fillable = ['nama'];
    public $timestamps = true;

    public function Program ()
    {
    	return $this->hasMany('App\Program','kategori_id');
    }
}
