@extends('layout/main')

@section('title', 'Data Penduduk')

@section('container')
   <div class="container">
        <div class="row">
            <div class="col-14">
            <h1>Data Penduduk</h1>
            <a href="/penduduk/create" class="btn btn-primary my-3">+ Tambah Data Penduduk</a>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($citizens as $citizen)
                        <tr>
                    
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="/datapenduduk/{{ $citizen->ID }}" class="text-reset">{{$citizen -> Nama}}</a></td>
                        <td>{{$citizen -> NIK}}</td>
                        <td>{{$citizen -> JenisKelamin}}</td>
                        <td>{{$citizen -> Usia}}</td>
                        <td>{{$citizen -> Alamat}}</td>
                        <td>
                            <a href="/penduduk/{{ $citizen->ID}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/penduduk/{{ $citizen->ID}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form> 
                        </td>
                    
                        </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
   </div>
@endsection