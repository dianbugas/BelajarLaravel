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
                    <th scope="col">#</th>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection