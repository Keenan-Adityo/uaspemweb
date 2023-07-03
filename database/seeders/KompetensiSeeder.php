<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KompetensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kompetensis')->insert([
            'kompetensi' => 'Berkompetensi',
        ]);
        DB::table('kompetensis')->insert([
            'kompetensi' => 'Kurang Berkompetensi',
        ]);
        DB::table('kompetensis')->insert([
            'kompetensi' => 'Tidak Berkompetensi',
        ]);
    }
}
