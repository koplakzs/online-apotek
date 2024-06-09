@extends('layouts.admin')

@section('content')
<h3>Halaman Profile</h3>
    <div class="main-body">
              <a href="/administrator/profile/create" class="btn btn-sm btn-primary" > tambah </a>
      
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">Nama</th>
                      <th scope="col">No Hp</th>
                      <th scope="col">Moto</th>
                      <th scope="col">Action</th>
                    </tr>
            </thead>
            <tbody>
              @forelse ($profile as $key =>$item)
              <tr>
                  <th scope="row">{{$key + 1}}</th>
                  <td>{{$item->nama}}</td>
                  <td>{{$item->no_hp}}</td>
                  <td>{{$item->moto}}</td>
                  <td>
                  <form action="/administrator/profile/{{$item->id}}" method="POST" onsubmit="return confirmDelete(event)">
                      <a href="/administrator/profile/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                      <a href="/administrator/profile/{{$item->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                      @csrf
                      @method("DELETE")
                      <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                  </form>
                  </td>
              </tr>
              @empty
              <tr>
                  <td>Data Kosong</td>
              </tr>   
              @endforelse
            </tbody>
           </table>
    </div>
@endsection
