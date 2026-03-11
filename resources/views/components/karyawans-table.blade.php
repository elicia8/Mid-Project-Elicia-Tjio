<table class="table table-striped table-hover table-bordered text-center">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($karyawans as $karyawan)
            <tr>
                <th scope="row">{{ $karyawan->id }}</th>
                <td>{{ $karyawan->nama }}</td>
                <td>{{ $karyawan->umur }}</td>
                <td>{{ $karyawan->alamat }}</td>
                <td>{{ $karyawan->nomor_telepon }}</td>
                <td>
                    <a href="/edit/{{ $karyawan->id }}" class="btn btn-warning">Edit</a>
                    <a href="/delete/{{ $karyawan->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
