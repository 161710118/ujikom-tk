<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimonis';
    protected $fillable = ['foto','nama','deskripsi'];
    public $timestamps = true;
}
