<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pegawai;
use Faker\Generator as Faker;

$factory->define(Pegawai::class, function (Faker $faker) {
    return [
        'jenis_surat' => $faker -> jenis_surat,
        'nama_pegawai' => $faker->name,
        'isi' => $faker->isi,
        'email' => $faker->unique()->safeEmail,
        'alamat' => $faker->secondaryAddress,
        

    ];
});
