@extends('layouts.app')

@section('title', 'Daftar Karyawan')


@section('h1')
    <h1 class="text-center">Daftar Karyawan PT ECOAS</h1>
@endsection
@section('content')
    <div>
        <x-karyawans-table :karyawans="$karyawans"></x-karyawans-table>
        {{-- <a href="/edit" class="btn btn-warning">Mode Edit</a> --}}
    </div>
@endsection
