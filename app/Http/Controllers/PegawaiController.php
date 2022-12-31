<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function data()
    {
        $pegawai = DB::table('pegawai')->paginate(5);
        return view ('pegawai.pegawai', ['pegawai'=>$pegawai]);
    }

    public function add()
    {
        return view ('pegawai.add');
    }
    public function addProcess(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|min:10',
            'nama' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'kontrak' => 'required',
        ]);

        DB::table('pegawai')->insert([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Alamat' => $request->alamat,
            'Jabatan' => $request->jabatan,
            'Kontrak' => $request->kontrak,
        ]);
        return redirect('pegawai')->with('status', 'Data berhasil ditambah!');
    }
    public function edit($id)
    {
        $pegawai = DB::table('pegawai')->where('id', $id)->first();
        return view ('pegawai.edit', compact('pegawai'));
    }
    public function editProcess(Request $request, $id)
    {
        $validated = $request->validate([
            'nip' => 'required|min:10',
            'nama' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'kontrak' => 'required',
        ]);

        DB::table('pegawai')->where('id', $id)->update([
            'NIP' => $request->nip,
            'Nama' => $request->nama,
            'Alamat' => $request->alamat,
            'Jabatan' => $request->jabatan,
            'Kontrak' => $request->kontrak,
        ]);
        return redirect('pegawai')->with('status', 'Data berhasil diedit!');
    }
    public function delete($id)
    {
        DB::table('pegawai')->where('id', $id)->delete();
        return redirect('pegawai')->with('status', 'Data berhasil dihapus!');
    }
}
