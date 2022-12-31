<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->insert([
            'NIDN' => '12345678',
            'Nama' => 'Rahmat',
            'Alamat' => 'Semarang',
            'Pendidikan' => 'Sarjana Pendidikan',
        ]);
    }
}
