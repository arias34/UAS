<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function data()
    {
        $dosen = DB::table('dosen')->paginate(5);
        return view ('dosen.dosen', ['dosen'=>$dosen]);
    }

    public function add()
    {
        return view ('dosen.add');
    }
    public function addProcess(Request $request)
    {
        $validated = $request->validate([
            'nidn' => 'required|min:5',
            'nama' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'mengampu' => 'required',
        ]);

        DB::table('dosen')->insert([
            'NIDN' => $request->nidn,
            'Nama' => $request->nama,
            'Alamat' => $request->alamat,
            'Pendidikan' => $request->pendidikan,
            'Mengampu' => $request->mengampu,
        ]);
        return redirect('dosen')->with('status', 'Data berhasil ditambah!');
    }
    public function edit($id)
    {
        $dosen = DB::table('dosen')->where('id', $id)->first();
        return view ('dosen.edit', compact('dosen'));
    }
    public function editProcess(Request $request, $id)
    {
        $validated = $request->validate([
            'nidn' => 'required|min:5',
            'nama' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'mengampu' => 'required',
        ]);

        DB::table('dosen')->where('id', $id)->update([
            'NIDN' => $request->nidn,
            'Nama' => $request->nama,
            'Alamat' => $request->alamat,
            'Pendidikan' => $request->pendidikan,
            'Mengampu' => $request->mengampu,
        ]);
        return redirect('dosen')->with('status', 'Data berhasil diedit!');
    }
    public function delete($id)
    {
        DB::table('dosen')->where('id', $id)->delete();
        return redirect('dosen')->with('status', 'Data berhasil dihapus!');
    }
}
