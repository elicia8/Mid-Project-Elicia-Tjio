<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ECOAS | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <x-header>Home Page</x-header>
    <div class="container my-5">
        <table class="table table-primary table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $k)
                <tr>
                    <th scope="row">{{ $k->id }}</th>
                    <td>{{ $k->nama }}</td>
                    <td>{{ $k->umur }}</td>
                    <td>{{ $k->alamat }}</td>
                    <td>{{ $k->nomor_telepon }}</td>
                    <td>
                        <a href="/edit/{{ $k->id }}" class="btn btn-warning">Edit</a>
                        <a href="/delete/{{ $k->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="tambah" class="btn btn-primary">Tambah Karyawan</a>
    </div>
</body>

</html>