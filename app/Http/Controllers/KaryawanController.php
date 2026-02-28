<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $karyawans = Karyawan::all();
        return view('home', compact('karyawans'));
    }
    public function create(){
        return view('tambah');
    }
    public function edit($id){
        $karyawan = Karyawan::find($id);
        return view('edit', compact('karyawan'));
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'nama' => 'required|string|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'nomor_telepon' => 'required|string|min:9|max:12|regex:/^08[0-9]{7,10}$/'
        ]);
        Karyawan::find($id)->update($validated);
        return redirect('/');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required|string|min:5|max:20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|min:10|max:40',
            'nomor_telepon' => 'required|string|min:9|max:12|regex:/^08[0-9]{7,10}$/'
        ]);

        Karyawan::create($validated);
        return redirect('/');
    }
    public function destroy($id){
        Karyawan::find($id)->delete();
        return redirect('/');
    }
}
