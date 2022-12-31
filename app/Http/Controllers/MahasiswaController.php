<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function data()
    {
        $mahasiswa = DB::table('mahasiswa')->paginate(5);

        return view ('mahasiswa.mahasiswa', ['mahasiswa'=>$mahasiswa]);
    }

    public function add()
    {
        return view ('mahasiswa.add');
    }
    public function addProcess(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|min:10',
            'nama' => 'required',
            'alamat' => 'required',
            'prodi' => 'required',
            'tahun' => 'required',
        ]);

        DB::table('mahasiswa')->insert([
            'NIM' => $request->nim,
            'Nama' => $request->nama,
            'Alamat' => $request->alamat,
            'Prodi' => $request->prodi,
            'Tahun' => $request->tahun,
        ]);
        return redirect('mahasiswa')->with('status', 'Data berhasil ditambah!');
    }
    public function edit($id)
    {
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->first();
        return view ('mahasiswa.edit', compact('mahasiswa'));
    }
    public function editProcess(Request $request, $id)
    {
        $validated = $request->validate([
            'nim' => 'required|min:10',
            'nama' => 'required',
            'alamat' => 'required',
            'prodi' => 'required',
            'tahun' => 'required',
        ]);

        DB::table('mahasiswa')->where('id', $id)->update([
            'NIM' => $request->nim,
            'Nama' => $request->nama,
            'Alamat' => $request->alamat,
            'Prodi' => $request->prodi,
            'Tahun' => $request->tahun,
        ]);
        return redirect('mahasiswa')->with('status', 'Data berhasil diedit!');
    }
    public function delete($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('mahasiswa')->with('status', 'Data berhasil dihapus!');
    }


}
