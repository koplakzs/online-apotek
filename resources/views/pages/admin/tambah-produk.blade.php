@extends('layouts.admin')

@section('content')
<h3>Tambah Produk</h3>
<form method="POST" action="/administrator/product">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    <div class="form-group">
      <label >Nama Produk</label>
      <input type="text" class="form-control" name="nama_produk">
    </div>
    <div class="form-group">
      <label >Harga</label>
      <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
       <label>Deskripsi</label><br>
        <textarea name="deskripsi" class="from-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
