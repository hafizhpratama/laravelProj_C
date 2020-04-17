@extends('layout/main')

@section('title', 'Daftar Mahasiswa Baru')

@section('container')
<div class="container mt-4">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-10" style="color: white">Daftar Mahasiswa Baru</h1>
            <a href="/students/create" class="btn btn-primary my-3">Tambah Data</a>

            @if (session('status'))
 <div class="alert alert-success">
 {{ session('status')}}
 </div>
@endif
        </div>
    </div>
</div>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
            <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nim}}</td>
            <td>{{$mhs->email}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td>
                <a href="" class="badge badge-success">Edit</a>
                <a href="" class="badge badge-danger">Delete</a>
            </td>
            </tr>

            @endforeach
        </tbody>
    </table>

</div>

@endsection

