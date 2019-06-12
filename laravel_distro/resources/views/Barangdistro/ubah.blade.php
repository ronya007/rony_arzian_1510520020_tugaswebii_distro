@extends('Barangdistro.layout')

@section('title')
Ubah Data barang
@endsection

@section('content')
<a href="{{ url('barangdistro') }}" class="btn btn-success btn-sm">
	Daftar Barang
</a>
<form method="post" action="{{ url('barangdistro/'.$brg->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>Nama Barang</label>
	<input type="text" name="nama" value="{{ $brg->nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Jenis Barang</label>
		<input type="text" name="jenis" value="{{ $brg->jenis }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Merk</label>
		<textarea name="merk" class="form-control">{{ $brg->merk }}</textarea>
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="harga" name="harga" value="{{ $brg->harga }}" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Ubah Data
	</button>
</form>
@endsection