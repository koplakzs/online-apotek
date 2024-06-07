@extends('layouts.admin')

@section('content')
    <div class="main-body">
        <div class="card">
            <div class="card-header ">
                <h5>Daftar Kategori Service dan Produk</h5>
                <button class="card-header-right  btn waves-effect waves-light btn-primary btn-outline-primary px-3"
                    data-toggle="modal" data-target="#addKategoriModal">Tambah
                    Kategori</button>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $item => $value)
                                <tr>
                                    <th scope="row"> {{ $item + 1 }} </th>
                                    <td> {{ $value->nama_kategori }} </td>
                                    <td class="d-flex">
                                        <a href="" class="mr-2" role="button" data-toggle="modal"
                                            data-target="#deleteModal{{ $value->kategori_id }}">
                                            <h5 class="ti-trash fs-3"></h5>
                                        </a>
                                        <a href="/administrator/category/{{ $value->kategori_id }}/edit">
                                            <h5 class="ti-pencil">
                                            </h5>
                                        </a>
                                    </td>
                                </tr>

                                {{-- Modal Delete --}}
                                <div class="modal fade" id="deleteModal{{ $value->kategori_id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Hapus Kategori</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Apakah anda yakin ingin menghapus kategori ini ?</h5>
                                                <form action="/administrator/category/{{ $value->kategori_id }}"
                                                    method="POST">
                                                    @method('delete')
                                                    @csrf
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger">Hapus
                                                            Kategori</button>
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
        <div class="modal fade" id="addKategoriModal" tabindex="-1" role="dialog" aria-labelledby="addKategoriModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/administrator/category" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kategori">Jenis Kategori</label>
                                <input type="text" class="form-control" id="kategori" placeholder="Tambahkan Kategori"
                                    name="nama_kategori">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan Kategori</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
