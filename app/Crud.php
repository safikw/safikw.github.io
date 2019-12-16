<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
	protected $table = 'sample_data';
    protected $fillable = ['deskripsi', 'lokasi', 'image', 'point'];
}
