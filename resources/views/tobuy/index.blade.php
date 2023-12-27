@extends('layouts.candy')

@section('content')
    <div class="container">
        <a class="btn btn-dark" href="/tobuy/create">Tambah List</a>
        <table class="table table-success table-striped">
            <tr>
                <th>No.</th>
                <th>NAMA BARANG</th>
                <th>HARGA BARANG</th>
                <th>WAKTU PEMBELIAN</th>
                <th>KETERANGAN</th>
                <th>AKSI</th>
            </tr>
            @foreach($tobuy as $t)
            <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->barang}}</td>
                <td>{{$t->harga}}</td>
                <td>{{$t->waktu}}</td>
                <td>{{$t->keterangan}}</td>
                <td>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <a class="btn btn-dark" href="/tobuy/{{$t->id}}/edit">Edit</a>
                        <form action="/tobuy/{{$t->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-secondary" type="submit" value="Hapus">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
