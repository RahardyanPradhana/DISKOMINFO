@extends('layout/main')

@section('title', 'Diskominfo')

@section('container')
   <div class="container">
        <div class="row">
            <div class="col-10">
            <h1>Data Penduduk</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($penduduk as $p)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{$p -> Nama}}</td>
                    <td>{{$p -> NIK}}</td>
                    <td>{{$p -> JenisKelamin}}</td>
                    <td>{{$p -> Usia}}</td>
                    <td>{{$p -> Alamat}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
   </div>
@endsection