<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenilaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penilaians')->insert([
            'penilaian' => 'Sangat Baik',
        ]);
        DB::table('penilaians')->insert([
            'penilaian' => 'Baik',
        ]);
        DB::table('penilaians')->insert([
            'penilaian' => 'Kurang Baik',
        ]);
        DB::table('penilaians')->insert([
            'penilaian' => 'Tidak Baik',
        ]);
    }
}
