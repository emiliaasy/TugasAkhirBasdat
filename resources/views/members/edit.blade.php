@extends('layout/main')

@section('title', 'Form Ubah Data Anggota')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
					<div class="panel-heading">
                        <h3 class="panel-title">Edit Data</h3>
                    </div>
                    <div class="panel-body">
						<form method="post" action="/members/{{ $member->id }}" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ $member->nama }}">
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ $member->email }}">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ $member->alamat }}">
                                @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kontak">Kontak</label>
                                <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" placeholder="Masukkan Kontak" name="kontak" value="{{ $member->kontak }}">
                                @error('kontak')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="avatar">Avatar</label>
                                <input type="file" class="form-control" id="avatar" placeholder="Tambahkan Foto Profil" name="avatar" value="{{ $member->avatar }}">
                            </div>
                            <button type="submit" class="btn btn-primary float-right my-3" action="/members">Save Changes</button>
                        </form>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop