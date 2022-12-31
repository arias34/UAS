<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'NIP' => '154234',
            'Nama' => 'Darso',
            'Alamat' => 'Semarang',
            'Jabatan' => 'Satpam',
            'Kontrak' => '2022 - 2027',
        ]);
    }
}
