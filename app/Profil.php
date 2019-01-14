<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
	protected $table = 'profils';
    protected $fillable = ['judul','deskripsi'];
    public $timestamps = true;

}
