@extends('layouts.admin')

@section('content')
<h5>Halaman Produk</h5>
        <a href="/administrator/product/create" class="btn btn-sm btn-primary">Tambah Produk</a>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($produk as $key => $item)
              <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->nama_produk}}</td>
                <td>{{$item->harga}}</td>
                <td>{{$item->deskripsi}}</td>
                <td>
                    
              </tr>

              @empty
              <tr>
                  <td>Data Kosong</td>
              </tr>   
              @endforelse
              
            </tbody>
          </table>
@endsection
