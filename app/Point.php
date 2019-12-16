<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
   protected $table = 'point';
    protected $fillable = ['deskripsi', 'lokasi', 'image', 'rate'];
}
