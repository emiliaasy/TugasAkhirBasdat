@extends('layout/main')

@section('title', 'Daftar Anggota')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="mt=3">Daftar Anggota</h1>
                <a href="/members/create" class="btn btn-primary my-3">Tambah Data Anggota</a>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <ul class="list-group">
                    @foreach( $members as $member )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $member->nama }}
                        <a href="/members/{{ $member->id }}" class="badge badge-info">detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
   