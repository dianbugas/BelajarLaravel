<!-- bisa pakai titik atau sles -->
@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table">
                <thead class="thead-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th scope="row">1asd</th>
                        <th scope="row">1asd</th>
                        <th scope="row">1dasd</th>
                        <th scope="row">1dasd</th>
                        <th scope="row">1dasdasd</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection