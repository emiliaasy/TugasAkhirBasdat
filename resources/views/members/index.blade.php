@extends('layout/main')

@section('title', 'Daftar Anggota')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
								<div class="panel-heading">
                                    <h3 class="panel-title" data-position="top-center">Daftar Anggota</h3>
                                    @if (session('status'))
                                    <div class="label label-success btn-toastr" data-position="bottom-center">
                                    {{ session('status') }}
                                    </div>
                                    @endif
                                </div>
                                <div class="panel-body">
									<table class="table table-striped">
										<tbody>
                                            @foreach( $members as $member )
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $member->nama }}
                                            <a href="/members/{{ $member->id }}" class="badge badge-info">detail</a>
                                            </li>
                                            @endforeach
										</tbody>
									</table>
                                </div>
                                <div class="container">
                                    <button type="button" class="btn btn-primary float-right my-3" data-toggle="modal" data-target="#exampleModal">Tambah Data Anggota</button>
                                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="/members">
                     @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" placeholder="Masukkan Kontak" name="kontak" value="{{ old('kontak') }}">
                        @error('kontak')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                   
            </div>
        </div>
    </div>
</div>
       
@stop