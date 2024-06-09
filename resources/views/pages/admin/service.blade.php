@extends('layouts.admin')

@section('content')
<div class="main-body">
    <div class="main-body">
        <div class="card">
            <div class="card-header ">
                <h5>Service</h5>
                <button class="card-header-right  btn waves-effect waves-light btn-primary btn-outline-primary px-3"
                    data-toggle="modal" data-target="#addKategoriModal">Tambah
                    Service</button>
            </div>
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Service</th>
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
                                <td> {{ $value->nama_services }} </td>
                                <td> {{ $value->deskripsi }} </td>
                                <td> {{ $value->kategori->nama_kategori }} </td>
                                <td> {{ $value->images }} </td>
                                <td class="d-flex">
                                    <a href="" class="mr-2" role="button" data-toggle="modal"
                                        data-target="#deleteModal{{ $value->service_id }}">
                                        <h5 class="ti-trash fs-3"></h5>
                                    </a>
                                    <a href="/administrator/service/{{ $value->service_id }}/edit">
                                        <h5 class="ti-pencil">
                                        </h5>
                                    </a>
                                </td>
                            </tr>

                            {{-- Modal Delete --}}
                            <div class="modal fade" id="deleteModal{{ $value->service_id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Hapus Service</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5>Apakah anda yakin ingin menghapus kategori ini ?</h5>
                                            <form action="/administrator/service/{{ $value->service_id }}"
                                                method="POST">
                                                @method('delete')
                                                @csrf
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Hapus
                                                        Service</button>
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
        <div class="modal fade" id="addKategoriModal" tabindex="-1" role="dialog"
            aria-labelledby="addKategoriModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/administrator/service" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_services">Nama Service</label>
                                <input type="text" class="form-control" id="nama_services"
                                    placeholder="Tambahkan Nama Service.." name="nama_services">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" placeholder="Tambahkan Deskripsi.."
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
                                <button type="submit" class="btn btn-primary">Simpan Service</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
