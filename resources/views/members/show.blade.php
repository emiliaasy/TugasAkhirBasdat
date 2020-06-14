@extends('layout/main')

@section('title', 'Detail Anggota')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="mt=3">Detail Anggota</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $member->email }}</h6>
                        <p class="card-text">{{ $member->alamat }}</p>
                        <p class="card-text">{{ $member->kontak }}</p>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <form action="{{ $member->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/items" class="card-link">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
   