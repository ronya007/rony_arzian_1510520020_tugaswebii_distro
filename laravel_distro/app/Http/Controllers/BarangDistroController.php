<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarangDistro;
class BarangDistroController extends Controller
{
    public function index(){
		$data = Barangdistro::all();
		return view('Barangdistro.index', compact('data'));
	}

	public function create(){
		return view('Barangdistro.tambah');
	}

	public function store(Request $barangdistro){
		
		Barangdistro::create($barangdistro->all());
		return redirect('barangdistro');
	}
	public function edit($id){	
		$brg = Barangdistro::find($id);
		return view('Barangdistro.ubah', compact('brg'));
	}
	public function update(Request $barangdistro, $id){
		$brg = $barangdistro->all();
		Barangdistro::find($id)->update($brg);
		return redirect('barangdistro');
    }
    public function destroy($id){
        Barangdistro::find($id)->delete();
        return redirect('barangdistro');
    }
}
