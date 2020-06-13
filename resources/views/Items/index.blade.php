@extends('layout/main')

@section('title', 'Daftar Anggota')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-5">
                <h1 class="mt=3">Daftar Anggota</h1>
                <ul class="list-group">
                    @foreach( $items as $item )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item->nama }}
                        <a href="/items/{{ $item->id }}" class="badge badge-info">detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
   