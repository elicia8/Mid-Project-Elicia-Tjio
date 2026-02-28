<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ECOAS | Edit Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <x-header>Edit Karyawan</x-header>
    <div class="container my-5">
        <form action="update/{{ $karyawan->id }}" method="POST">
            @csrf
            <div class="mb-3 col-sm-5 mx-auto">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $karyawan->nama) }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-sm-5 mx-auto">
                <label for="umur" class="form-label">Umur</label>
                <input type="text" class="form-control" id="umur" name="umur" value="{{ old('umur', $karyawan->umur) }}">
                @error('umur')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-sm-5 mx-auto">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $karyawan->alamat) }}">
                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 col-sm-5 mx-auto">
                <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $karyawan->nomor_telepon) }}">
                @error('nomor_telepon')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-center col-sm-5 mx-auto">
                <button type="submit" class="btn btn-primary col-sm">Update</button>
            </div>
        </form>
    </div>

</body>

</html>