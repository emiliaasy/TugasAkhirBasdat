@extends('layout/main')

@section('title', 'Detail Anggota')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt=3 d-inline">Detail Anggota</h1>				
                    <div class="well">
                                    
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $member->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $member->email }}</h6>
                        <p class="card-text">{{ $member->alamat }}</p>
                        <p class="card-text">{{ $member->kontak }}</p>
                        <a href="{{ $member->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="{{ $member->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/members" class="card-link">Back</a>
                    </div>
                </div>
								</div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-5">
                
            </div>
        </div>
    </div>
@endsection
   