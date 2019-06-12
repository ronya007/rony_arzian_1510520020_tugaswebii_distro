<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabahkoperasi extends Model
{
    protected $table = 'tbl_nasabahkoperasi';
    protected $fillable = ['nik','nama','alamat','pekerjaan'];
}
