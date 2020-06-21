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
                                    <h3 class="panel-title" data-position="top-center">Buku yang Tersedia</h3>
                                </div>
                                <div class="panel-body">
									<table class="table table-striped">
										<tbody>
                                            @foreach( $books as $book )
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                            {{ $book->judul }}
                                            -
                                            {{ $book->penulis }}
                                            <a href="/bookshelf/{{ $book->id }}" class="badge badge-info">detail</a>
                                            </li>
                                            @endforeach
										</tbody>
									</table>
                                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
       
@stop
