@extends('layouts.admin')

@section('content')
    <div class="main-body">
        <div class="card">
            <div class="card-header ">
                <h5>Daftar Kategori Service dan Produk</h5>

            </div>
            <div class="card-block table-border-style">
                <form action="/administrator/category/{{ $data->kategori_id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="kategori">Jenis Kategori</label>
                        <input type="text" class="form-control" id="kategori" placeholder="Edit Kategori"
                            name="nama_kategori" value="{{ $data->nama_kategori }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
