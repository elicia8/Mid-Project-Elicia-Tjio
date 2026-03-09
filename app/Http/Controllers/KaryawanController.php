<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|min:5|max:10',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'nomor_telepon' => 'required|string|min:9|max:12|regex:/^08[0-9]*$/'
        ]);
        Karyawan::create($validated);

        return redirect('/listkaryawan');
    }
}
