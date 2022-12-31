<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'NIM' => 'G.211.20.0079',
            'Nama' => 'Aria Setiaji',
            'Alamat' => 'Semarang',
            'Prodi' => 'TI',
            'Tahun' => '2020',
        ]);
    }
}
