@extends('layout/main')

@section('title', 'Data Penduduk')

@section('container')
   <div class="container">
        <div class="row">
            <div class="col-10">
            <h1>Detail Penduduk</h1>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$citizen->Nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$citizen->NIK}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Usia : {{$citizen->Usia}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Jenis Kelamin : {{$citizen->JenisKelamin}}</h6>
                    <p class="card-text">{{$citizen->Alamat}}</p>
                    <a href="{{ $citizen->ID }}/edit" class="btn btn-primary">Ubah</a>
                    <form action="{{ $citizen->ID}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>                    
                    <a href="/datapenduduk" class="card-link">Kembali</a>
                </div>
                </div>
            </div>
        </div>
   </div>
@endsection