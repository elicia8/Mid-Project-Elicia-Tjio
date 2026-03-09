@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-center">Selamat Datang di PT ECOAS</h1>
    <div class="text-center">
        <a href="/listkaryawan" class="btn btn-primary text-center">Lihat Daftar Karyawan</a>
        <a href="/create" class="btn btn-primary text-center">Tambah Karyawan</a>
    </div>
@endsection
