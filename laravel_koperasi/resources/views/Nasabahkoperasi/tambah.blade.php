@extends('Nasabahkoperasi.layout')

@section('title')
Tambah Data Nasabah
@endsection

@section('content')
<a href="{{ url('nasabahkoperasi') }}" class="btn btn-success btn-sm">
	Daftar Nasabah
</a>
<form method="post" action="{{ url('nasabahkoperasi') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Nik Nasabah</label>
		<input type="number" name="nik" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Nasabah</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label>Pekerjaan</label>
		<input type="text" name="pekerjaan" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection