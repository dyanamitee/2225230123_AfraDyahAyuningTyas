@extends('layouts.candy')

@section('content')
<div class="container">
    <h1>Create To Buy List</h1>
    <form action="/tobuy/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NAMA BARANG</label>
            <input type="text" name="barang" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">HARGA BARANG</label>
            <input type="text" name="harga" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">WAKTU PEMBELIAN</label>
            <input type="text" name="waktu" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">KETERANGAN</label>
            <textarea class="form-control" name="keterangan" rows="10"></textarea></br>
        </div>
            <input type="submit" class="btn btn-dark" name="submit" value="Simpan">
    </form>
</div>
@endsection