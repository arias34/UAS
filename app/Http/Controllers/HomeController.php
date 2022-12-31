<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jumlah_mahasiswa = Mahasiswa::all()->count();
        $jumlah_dosen = Dosen::all()->count();
        $jumlah_pegawai = Pegawai::all()->count();
        return view('home', compact('jumlah_mahasiswa', 'jumlah_dosen', 'jumlah_pegawai'));


    }
}
