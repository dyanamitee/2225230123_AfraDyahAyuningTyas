@extends('layouts.candy')

@section('content')
<div class="container">
    <h1>Edit To Buy List</h1>

    <form action="/tobuy/{{$tobuy->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NAMA BARANG</label>
            <input type="text" name="barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$tobuy->barang}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">HARGA BARANG</label>
            <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$tobuy->harga}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">WAKTU PEMBELIAN</label>
            <input type="text" name="waktu" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$tobuy->waktu}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">KETERANGAN</label>
            <textarea class="form-control" name="keterangan" rows="10">{{$tobuy->keterangan}}</textarea><br>
        </div>
        <input type="submit" name="submit" value="Perbarui">
    </form>
</div>
@endsection