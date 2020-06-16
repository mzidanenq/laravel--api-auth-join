<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Perusahaan;
use Faker\Generator as Faker;

$factory->define(Perusahaan::class, function (Faker $faker) {
    return [
        //
        'nama' => $faker->company,
        'total_aset' => $faker->numberBetween(5000000,999999999),
        'total_karyawan' => $faker->randomDigit,
    ];
});
