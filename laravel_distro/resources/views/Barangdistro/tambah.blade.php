@extends('Barangdistro.layout')

@section('title')
Tambah Data Barang
@endsection

@section('content')
<a href="{{ url('barangdistro') }}" class="btn btn-success btn-sm">
	Daftar Barang
</a>
<form method="post" action="{{ url('barangdistro') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Nama barang</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Jenis Barang</label>
		<input type="text" name="jenis" class="form-control">
	</div>
	<div class="form-group">
		<label>Merk</label>
		<textarea name="merk" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection