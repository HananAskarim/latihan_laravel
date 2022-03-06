<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Alda Saputri',
            'nis' => 112,
            'tgl_lahir' => '1999-08-23'
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Edo Saputro',
            'nis' => 122,
            'tgl_lahir' => '1999-09-01'
        ]);
    }
}
