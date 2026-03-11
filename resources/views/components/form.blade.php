<div class="d-flex justify-content-center">
    <form class="form-width" method="POST" action="{{ isset($karyawan) ? '/update/'.$karyawan->id : '/listkaryawan'}}">
        @csrf
        @isset($karyawan)
            @method('PUT')
        @endisset
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama"
                value="{{ old('nama', $karyawan->nama ?? '') }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" id="umur" name="umur" value="{{ old('umur', $karyawan->umur ?? '') }}">
            @error('umur')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat', $karyawan->alamat ?? '') }}">
            @error('alamat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $karyawan->nomor_telepon ?? '') }}">
            @error('nomor_telepon')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-dark w-100">{{ isset($karyawan) ? 'Update' : 'Submit' }}</button>
    </form>
</div>
