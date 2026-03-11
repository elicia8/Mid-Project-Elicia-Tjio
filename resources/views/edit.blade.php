@extends('layouts.app')

@section('title', 'Edit Karyawan')

@section('content')
    <h1 class="text-center">Edit Karyawan</h1>
    <x-form :karyawan="$karyawan"></x-form>
@endsection
