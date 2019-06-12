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

Route::get('/', function () {
    return view('welcome');
});


//Route::resource('mahasiswa','MahasiswaController');
 
Route::get('/brg', function(){
    return Barangdistro::all();
});



Route::get('barangdistro', 'BarangdistroController@index')
    ->name('barangdistro.index');

Route::get('tambah_barangdistro', 'BarangdistroController@create');
Route::resource('barangdistro', 'BarangdistroController');
