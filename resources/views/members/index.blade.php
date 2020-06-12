@extends('layout/main')

@section('title', 'Daftar Anggota')

@section('container')

    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt=3">Daftar Anggota</h1>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($anggota as $agt)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $agt->nama }}</td>
                            <td>{{ $agt->email }}</td>
                            <td>{{ $agt->alamat }}</td>
                            <td>{{ $agt->kontak }}</td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
   