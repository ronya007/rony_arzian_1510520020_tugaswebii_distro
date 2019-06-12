<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Nasabahkoperasi;

Route::get('/', function () {
    return view('welcome');
});

 
 //Route::resource('mahasiswa','MahasiswaController');
 
 Route::get('/nsb', function(){
     return Nasabahkoperasi::all();
 });
 


 Route::get('nasabahokperasi', 'NasabahkoperasiController@index')
     ->name('nasabahoperasi.index');
 
 Route::get('tambah_nasabahkoperasi', 'NasabahkoperasiController@create');
 Route::resource('nasabahkoperasi', 'NasabahkoperasiController');
 