@extends('layout.main')
@section('title', 'From Tambah Data Students')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">From Tambah Data Students</h1>
            <form method="post" action="/students">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
                </div>
                <div class="form-group">
                    <label for="nrp">Nrp</label>
                    <input type="text" class="form-control" id="nrp" placeholder="NRP" name="nrp">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <label for="jurursan">Jurursan</label>
                    <input type="text" class="form-control" id="jurursan" placeholder="Jurursan" name="jurusan">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>    
@endsection