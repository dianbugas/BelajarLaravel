@extends('layout.main')
@section('title', 'From Ubah Data Students')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">From Ubah Data Students</h1>
            <form method="post" action="/students/{{ $student->id }}">
                {{-- membajak --}}
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama Lengkap" name="nama" value="{{ $student->nama }}">
                    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nrp">Nrp</label>
                    <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="NRP" name="nrp" value="{{ $student->nrp }}">
                    @error('nrp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ $student->email }}">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurursan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Jurusan" name="jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>    
@endsection