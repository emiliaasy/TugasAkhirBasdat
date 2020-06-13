@extends('layout/main')

@section('title', 'Detail Anggota')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="mt=3">Detail Anggota</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->email }}</h6>
                        <p class="card-text">{{ $item->alamat }}</p>
                        <p class="card-text">{{ $item->kontak }}</p>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="/items" class="card-link">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
   