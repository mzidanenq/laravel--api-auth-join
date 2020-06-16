<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Karyawan;
use Faker\Generator as Faker;

$factory->define(Karyawan::class, function (Faker $faker) {
    return [
        //
        'perusahaan_id' => $faker->numberBetween(1,100),
        'nama' => $faker->name,
        'posisi' => $faker->jobTitle,
        'tanggal_lahir' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'gaji' => $faker->numberBetween(5000000,999999999)
    ];
});
