@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('content')
    <div class="text-center">
        <h1>Data Karyawan Baru</h1>
        <p>Isilah data karyawan baru di bawah ini</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="d-flex justify-content-center">
        <form class="w-30" method="POST" action="/listkaryawan">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-text">Nama harus berisi 5-10 karakter</div>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur">
                <div class="form-text">Umur harus lebih besar dari 20</div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
                <div class="form-text">Alamat harus berisi 10 - 40 karakter</div>
            </div>
            <div class="mb-3">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon">
                <div class="form-text">Nomor telepon harus berisi 9 - 12 karakter, diawali dengan '08'</div>
            </div>
            <button type="submit" class="btn btn-dark w-100">Submit</button>
        </form>
    </div>
@endsection
