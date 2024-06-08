@extends('layouts.admin')

@section('content')
<h3>Tambah Profile</h3>
<form method="POST" action="/administrator/profile">
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
      <label >Nama</label>
      <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label >No Hp</label>
      <input type="number" class="form-control" name="no_hp">
    </div>
    <div class="form-group">
       <label>Moto</label><br>
        <textarea name="moto" class="from-control" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
