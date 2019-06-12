@extends('Nasabahkoperasi.layout')

@section('title')
    Nasabah Koperasi
@endsection

@section('content')
    <a href="{{ url('tambah_nasabahkoperasi') }}" class="btn btn-success btn-sm">
        Tambah Nasabah
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Tools</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $i => $value)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $value->nik }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->pekerjaan }}</td>
                <td>
                <a href="{{ url('nasabahkoperasi/'.$value->id.'/edit')}}"class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('nasabahkoperasi/'.$value->id) }}" method="POST">{{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-success btn-sm">Hapus</button>
                    </form>
            </td>
               
                
                
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection