<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'tbl_mahasiswa';
    protected $fillable = ['nim','nama','alamat'];
}
