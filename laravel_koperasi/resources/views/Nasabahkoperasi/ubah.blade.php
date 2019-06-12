@extends('Nasabahkoperasi.layout')

@section('title')
Ubah Data Nasabah
@endsection

@section('content')
<a href="{{ url('nasabahkoperasi') }}" class="btn btn-success btn-sm">
	Daftar Nasabah
</a>
<form method="post" action="{{ url('nasabahkoperasi/'.$nsb->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>Nik Nasabah</label>
	<input type="number" name="nik" value="{{ $nsb->nik }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Nasabah</label>
		<input type="text" name="nama" value="{{ $nsb->nama }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control">{{ $nsb->alamat }}</textarea>
	</div>
	<div class="form-group">
		<label>Pekerjaan</label>
		<input type="text" name="pekerjaan" value="{{ $nsb->pekerjaan }}" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Ubah Data
	</button>
</form>
@endsection