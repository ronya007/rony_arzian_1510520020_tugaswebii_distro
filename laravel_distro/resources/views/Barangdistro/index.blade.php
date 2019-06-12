@extends('Barangdistro.layout')

@section('title')
    Barang Distro
@endsection

@section('content')
    <a href="{{ url('tambah_barangdistro') }}" class="btn btn-success btn-sm">
        Tambah Barang
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Merk</th>
            <th>harga</th>
            <th>Tools</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $i => $value)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->jenis }}</td>
                <td>{{ $value->merk }}</td>
                <td>{{ $value->harga }}</td>
                <td>
                <a href="{{ url('barangdistro/'.$value->id.'/edit')}}"class="btn btn-warning btn-sm">Ubah</a>
                <form action="{{ url('barangdistro/'.$value->id) }}" method="POST">{{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
            </td>
               
                
                
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection