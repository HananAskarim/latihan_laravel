<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'PakGuru',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Hnana Askarim',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'hanan@gmail.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Widi Hastuti',
            'role' => 'siswa',
            'siswa_id' => 2,
            'email' => 'widi@gmail.com',
            'password' => bcrypt('password123')
        ]);
    }
}
