@extends('layout/main')

@section('title', 'Tambah Data Penduduk')

@section('container')
   <div class="container">
        <div class="row">
            <div class="col-10">
            <h1>Tambah Data Penduduk</h1>
            <form method="post" action="/datapenduduk">
            @csrf
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" placeholder="Masukkan Nama" name="Nama" value="{{ old('Nama') }}">
                    @error ('Nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>@enderror
                </div>
                <div class="form-group">
                    <label for="NIK">NIK</label>
                    <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" placeholder="Masukkan NIK" name="NIK" value="{{ old('NIK') }}">
                    @error ('NIK')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>@enderror
                </div>
                <div class="form-group">
                    <label for="JenisKelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control @error('JenisKelamin') is-invalid @enderror" id="JenisKelamin" placeholder="Masukkan Jenis Kelamin" name="JenisKelamin" value="{{ old('JenisKelamin') }}">
                    @error ('JenisKelamin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>@enderror
                </div>
                <div class="form-group">
                    <label for="Usia">Usia</label>
                    <input type="text" class="form-control @error('Usia') is-invalid @enderror" id="Usia" placeholder="Masukkan Usia" name="Usia" value="{{ old('Usia') }}">
                    @error ('Usia')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>@enderror
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" placeholder="Masukkan Alamat" name="Alamat" value="{{ old('Alamat') }}">
                    @error ('Alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">+ Tambahkan</button>
            </form>
        </div>
   </div>
@endsection