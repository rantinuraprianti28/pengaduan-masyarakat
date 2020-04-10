<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakat';

    protected $fillable = [
		'nik', 'nama', 'username', 'password', 'telp'
    ];
}
