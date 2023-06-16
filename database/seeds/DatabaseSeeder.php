<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => "72210507",
            'nama' => "Eoudia",
            'gender' => "Wanita",
            'prodi' => "Sistem Informasi",
            'minat' => "ai, web",
        ]);
    }
}
