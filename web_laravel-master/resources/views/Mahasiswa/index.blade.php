@extends('Mahasiswa.layout')

@section('title')
    Mahasiswa
@endsection

@section('content')
    <a href="{{ url('tambah_mahasiswa') }}" class="btn btn-success btn-sm">
        Tambah Mahasiswa
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tools</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $i => $value)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $value->nim }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->alamat }}</td>
                <td>
                <a href="{{ url('mahasiswa/'.$value->id.'/edit')}}"class="btn btn-warning btn-sm">Ubah</a>
                </td> 
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection