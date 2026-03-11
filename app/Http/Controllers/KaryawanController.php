<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class KaryawanController extends Controller
{
    public function read()
    {
        $karyawans = Karyawan::all();
        return view('/listkaryawan', compact('karyawans'));
    }
    public function message(){
        $message = [
            'nama.required' => 'Nama wajib diisi',
            'nama.min' => 'Nama minimal 5 karakter',
            'nama.max' => 'Nama maksimal 10 karakter',
            'umur.required' => 'Umur wajib diisi',
            'umur.min' => 'Umur harus di atas 20 tahun',
            'umur.integer' => 'Umur harus berupa angka',
            'alamat.required' => 'Alamat wajib diisi',
            'alamat.min' => 'Alamat minimal 10 karakter',
            'alamat.max' => 'Alamat maksimal 40 karakter',
            'nomor_telepon.required' => 'Nomor telepon wajib diisi',
            'nomor_telepon.min' => 'Nomor telepon minimal 9 karakter',
            'nomor_telepon.max' => 'Nomor telepon maksimal 12 karakter',
            'nomor_telepon.regex' => "Nomor telepon harus diawali dengan '08'"
        ];
        return $message;
    }
    public function validated(Request $request){
        $message = $this->message();
        $validated = $request->validate([
            'nama' => 'required|string|min:5|max:10',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'nomor_telepon' => 'required|string|min:9|max:12|regex:/^08[0-9]*$/'
        ], $message);
        return $validated;
    }
    public function store(Request $request)
    {
        $validated = $this->validated($request);
        Karyawan::create($validated);
        return redirect('/listkaryawan');
    }
    public function destroy($id)
    {
        $karyawans = Karyawan::all();
        $karyawan = $karyawans->findOrFail($id);
        $karyawan->delete();
        return redirect('/listkaryawan');
    }
    public function edit($id)
    {
        $karyawans = Karyawan::all();
        $karyawan = $karyawans->findOrFail($id);
        return view('edit', compact('karyawan'));
    }
    public function update(Request $request, $id)
    {
        $validated = $this->validated($request);
        $karyawans = Karyawan::all();
        $karyawan = $karyawans->findOrFail($id);
        $karyawan->update($validated);
        return redirect('/listkaryawan');
    }
}
