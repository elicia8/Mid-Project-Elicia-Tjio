@extends('layouts.app')

@section('title', 'Tambah Karyawan')

@section('content')
    <div class="text-center">
        <h1>Data Karyawan Baru</h1>
        <p>Isilah data karyawan baru di bawah ini</p>
        <!-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
                    </ul>
                </div>
            @endif -->
    </div>
    <x-form></x-form>

@endsection
