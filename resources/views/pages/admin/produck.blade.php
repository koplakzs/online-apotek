@extends('layouts.admin')

@section('content')
<div class="main-body">
    <div class="main-body">
        <div class="card">
            <div class="card-header ">
                <h5>Produk</h5>
                <button class="card-header-right  btn waves-effect waves-light btn-primary btn-outline-primary px-3"
                    data-toggle="modal" data-target="#addProdukModal">Tambah
                    Produk</button>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $item => $value)
                            <tr>
                                <th scope="row"> {{ $item + 1 }} </th>
                                <td> {{ $value->nama_produk }} </td>
                                <td> {{ $value->harga }} </td>
                                <td> {{ $value->deskripsi }} </td>
                                <td> {{ $value->kategori->nama_kategori }} </td>
                                <td> {{ $value->images }} </td>
                                <td class="d-flex">
                                    <a href="" class="mr-2" role="button" data-toggle="modal"
                                        data-target="#deleteModal{{ $value->produk_id }}">
                                        <h5 class="ti-trash fs-3"></h5>
                                    </a>
                                    <a href="/administrator/product/{{ $value->produk_id }}/edit">
                                        <h5 class="ti-pencil">
                                        </h5>
                                    </a>
                                </td>
                            </tr>

                            {{-- Modal Delete --}}
                            <div class="modal fade" id="deleteModal{{ $value->produk_id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Hapus Produk</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Apakah anda yakin ingin menghapus kategori ini ?</h5>
                                            <form action="/administrator/product/{{ $value->produk_id }}"
                                                method="POST">
                                                @method('delete')
                                                @csrf
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Hapus
                                                        Produk</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="addProdukModal" tabindex="-1" role="dialog"
            aria-labelledby="addProdukModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/administrator/product" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk"
                                    placeholder="Tambahkan Nama Produk" name="nama_produk">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Produk</label>
                                <input type="text" class="form-control" id="harga"
                                    placeholder="Tambahkan Harga Produk" name="harga">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" placeholder="Tambahkan Deskripsi"
                                    name="deskripsi" rows="3" cols="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select name="kategori_id" id="kategori" class="form-control" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach($kategori as $k)
                                    <option value="{{$k->kategori_id}}">{{$k->nama_kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="images">Images</label>
                                    <input type="file" name="images" required class="form-control" id="images">
                                    <p style="font-style: italic; font-size:smaller; color:red;">* format : pdf, jpg, jpeg; size : 1mb</p>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan Produk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
