@extends('layouts.admin')

@section('content')
    <div class="main-body">
        <div class="card">
            <div class="card-header ">
                <h5>Halaman Profile</h5>
            </div>
            <div class="card-block table-border-style">

                <form action="/administrator/profile/{{ $profile->profile_id }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" class="form-control" name="nama"
                            value=" {{ $profile->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">No Hp</label>
                        <input type="number" id="phone" class="form-control" name="no_hp"
                            value="{{ $profile->no_hp }}">
                    </div>
                    <div class="form-group">
                        <label for="moto">Moto</label><br>
                        <textarea name="moto" id="moto" class="form-control" rows="3">  {{ $profile->moto }} </textarea>
                    </div>
                    <input type="hidden" id="email" class="form-control w-100" value="{{ $user->id_user }}"
                        name="id_user" readonly>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control w-100" value="{{ $user->email }}"
                            readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                </form>

            </div>

        </div>

    </div>
@endsection
