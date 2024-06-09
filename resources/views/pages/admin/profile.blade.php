@extends('layouts.admin')

@section('content')
    <div class="main-body">
        <div class="card">
            <div class="card-header ">
                <h5>Halaman Profile</h5>
            </div>
            <div class="card-block table-border-style">

                <form action="/administrator/profile" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" class="form-control" name="nama"
                            value=" <?= $profile !== null ? $profile->nama : '' ?> ">
                    </div>
                    <div class="form-group">
                        <label for="phone">No Hp</label>
                        <input type="number" id="phone" class="form-control" name="no_hp"
                            value="<?= $profile !== null ? $profile->no_hp : '' ?>">
                    </div>
                    <div class="form-group">
                        <label for="moto">Moto</label><br>
                        <textarea name="moto" id="moto" class="form-control" rows="3"> <?= $profile !== null ? $profile->moto : '' ?> </textarea>
                    </div>

                    <input type="hidden" id="email" class="form-control w-100" value="{{ $user->id_user }}"
                        name="id_user" readonly>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control w-100" value="{{ $user->email }}"
                            readonly>
                    </div>

                    <div class="btn-group">
                        <button type="<?= $profile !== null ? 'button' : 'submit' ?>" class="btn btn-primary mr-3">Tambah
                            Profile</button>
                        <a href=" <?= $profile !== null ? '/administrator/profile/' . $profile->profile_id . '/edit' : '/administrator/profile/' ?> "
                            class="btn btn-primary">Edit Profile</a>
                    </div>
                </form>

            </div>

        </div>

    </div>
@endsection
