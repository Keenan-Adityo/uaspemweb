<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawans')->insert([
            'nama' => 'Keenan',
            'divisi_id' => 1,
            'penilaian_id' => 1,
            'kompetensi_id' => 1,
        ]);
    }
}
