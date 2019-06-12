@extends('Mahasiswa.layout')

@section('title')
Ubah Data Mahasiswa
@endsection

@section('content')
<a href="{{ url('mahasiswa') }}" class="btn btn-success btn-sm">
	Daftar Mahasiswa
</a>
<form method="post" action="{{ url('mahasiswa/'.$mhs->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>Nim Mahasiswa</label>
	<input type="number" name="nim" value="{{ $mhs->nim }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Mahasiswa</label>
		<input type="text" name="nama" value="{{ $mhs->nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control">{{ $mhs->alamat }}</textarea>
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Ubah Data
	</button>
</form>
@endsection