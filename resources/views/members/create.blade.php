@extends('layout/main')

@section('title', 'Form Tambah Data Anggota')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt=3">Form Tambah Data Anggota</h1>
                <form method="post" action="/members">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" placeholder="Masukkan Kontak" name="kontak">
                        @error('kontak')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
   