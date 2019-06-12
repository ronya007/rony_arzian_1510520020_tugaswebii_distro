@extends('Mahasiswa.layout')

@section('title')
Tambah Data Mahasiswa
@endsection

@section('content')
<a href="{{ url('mahasiswa') }}" class="btn btn-success btn-sm">
	Daftar Mahasiswa
</a>
<form method="post" action="{{ url('mahasiswa') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Nim Mahasiswa</label>
		<input type="number" name="nim" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control"></textarea>
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection