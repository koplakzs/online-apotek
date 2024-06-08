@extends('layouts.admin')

@section('content')
    <div class="main-body">
        <div class="card">
            <div class="card-header ">
                <h5>Reset Email dan Password</h5>

            </div>
            <div class="card-block table-border-style">
                <form action="/administrator/reset-account" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>

        </div>
    @endsection
