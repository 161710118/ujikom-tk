<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = 'prestasis';
    protected $fillable = ['foto','tgl','nama','deskripsi'];
    public $timestamps = true;
}
