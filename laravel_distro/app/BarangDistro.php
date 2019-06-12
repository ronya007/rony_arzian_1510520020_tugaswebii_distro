<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangdistro extends Model
{
    protected $table = 'tbl_barang';
    protected $fillable = ['nama','jenis','merk','harga'];
}