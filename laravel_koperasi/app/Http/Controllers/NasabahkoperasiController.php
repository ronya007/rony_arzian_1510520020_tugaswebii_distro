<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nasabahkoperasi;
class NasabahkoperasiController extends Controller
{
    public function index(){
		$data = Nasabahkoperasi::all();
		return view('Nasabahkoperasi.index', compact('data'));
	}

	public function create(){
		return view('Nasabahkoperasi.tambah');
	}

	public function store(Request $nasabahkoperasi){
		
		Nasabahkoperasi::create($nasabahkoperasi->all());
		return redirect('nasabahkoperasi');
	}
	public function edit($id){	
		$nsb = Nasabahkoperasi::find($id);
		return view('Nasabahkoperasi.ubah', compact('nsb'));
	}
	public function update(Request $nasabahkoperasi, $id){
		$nsb = $nasabahkoperasi->all();
		Nasabahkoperasi::find($id)->update($nsb);
		return redirect('nasabahkoperasi');
    }
    public function destroy($id){
        Nasabahkoperasi::find($id)->delete();
        return redirect('nasabahkoperasi');
    }
}
