<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //membaca data
    protected $table = 'mahasiswa'; 
    //memanipulasi data
    protected $fillable = [
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];

}
/*public function up() {
    Schema::create('mahasiswa', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->integer('nim');
        $table->string('nama', 30);
        $table->string('gender', 30);
        $table->string('prodi', 30);
        $table->string('minat', 30);
        $table->timestamps();
    });
}

public function run() {
    DB::table('dosen')->insert([
        'id' => '72210507',
        'nama' => 'Eoudia',
        'gender' => 'Wanita',
        'prodi' => 'Sistem Informasi',
        'minat' => 'net,web'
    ]);
}

use Faker\Factory as Faker;

public function run() {
    $faker = Faker::create('id');
    for($i = 1; $i <= 10; $i++) {
        DB::table('mahasiswa')->insert([
            'id' => $faker->id(),
            'nama' => $faker->name(),
            'gender' => $faker->suffix(),
            'prodi' => $faker->title(),
            'minat' => $faker->jobTitle()
        ]);
    }
}*/
