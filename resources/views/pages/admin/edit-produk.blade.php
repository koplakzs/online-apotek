@extends('layouts.admin')

@section('content')
<div class="main-body">
    <div class="card">
        <div class="card-header ">
            <h5>Edit Produk</h5>

        </div>
        <div class="card-block table-border-style">
            <form action="/administrator/product/{{$data->produk_id}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" class="form-control" value="{{$data->nama_produk}}" id="nama_produk" placeholder="Tambahkan Nama Produk"
                        name="nama_produk">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Produk</label>
                    <input type="text" class="form-control" value="{{$data->harga}}" id="harga" placeholder="Tambahkan Harga Produk"
                        name="harga">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" cols="10">{{$data->deskripsi}}</textarea>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori_id" id="kategori" class="form-control" required>
                        <option value="{{$data->kategori_id}}">{{$data->kategori->nama_kategori}}</option>
                        @foreach($kategori as $k)
                        <option value="{{$k->kategori_id}}">{{$k->nama_kategori}}</option>
                        @endforeach
                    </select>
                </div>
                @if(!empty($data->images))
                    <div class="mt-2">
                        <img src="{{ asset('produk/' . $data->images) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                    </div>
                @endif
                <div class="form-group">
                    <label for="images">Images</label>
                    <input type="file" name="images" value="" class="form-control" id="images">
                    <p style="font-style: italic; font-size:smaller; color:red;">* format : pdf, jpg, jpeg; size : 1mb</p>
                </div>
                <div class="modal-footer">
                    <a href="/administrator/product" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary">Update Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
