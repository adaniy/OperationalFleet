<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\automjeti;
use App\personeli;
use App\karburanti;
use App\pjese;
use App\servisi;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $password ?: $password = bcrypt('admin'),
        'remember_token' => Str::random(10),
        'admin' => $faker->randomElement([User::ADMIN_USER , User::REGULAR_USER]),
    ];
});

$factory->define(automjeti::class, function (Faker $faker) {
    static $password;

    return [
        'nr_shasise' => Str::random(5),
        'Lloji' => $faker->word,
        'brendi' => $faker->word,
        'viti' => $faker->numberBetween(1950,2021),
        'regjistrimi' => $faker->randomNumber($nbDigits = 8),
        'kilometrat' => $faker->randomNumber($nbDigits = 8),
    ];
});


$factory->define(personeli::class, function (Faker $faker) {
    static $password;

    return [
        'nr_personal' => $faker->randomNumber($nbDigits = 8),
        'emri_mbiemri' => $faker->name,
        'email' => $faker->email,
        'data_lindjes' => $faker->date,
        'nr_telefonite' => $faker->randomNumber($nbDigits = 8),
        'niveli_shkollimit' => $faker->randomElement(['Fillore', 'Mesme', 'Fakultet', 'Master']),
        'grupi_gjakut' => $faker->randomElement(['A+', 'A-', 'AB+', 'AB-', 'B+', 'B-', '0+', '0-']),
    ];
});


$factory->define(karburanti::class, function (Faker $faker) {
    static $password;

    return [
        'automjeti_id' => $faker->numberBetween(0,100),
        'personeli_id' => $faker->numberBetween(0,200),
        'litra' => $faker->numberBetween(5,90),
        'shuma' => $faker->numberBetween(5,100),
        // 'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
    ];
});


$factory->define(servisi::class, function (Faker $faker) {
    static $password;

    return [
        'automjeti_id' => $faker->numberBetween(0,100),
        'personeli_id' => $faker->numberBetween(0,200),
        'pershkrimi' => $faker->word,
        'shuma' => $faker->numberBetween(50,200),
        'servisi_ardhshem' => $faker->dateTimeBetween($startDate = 'now', $endDate = '1 year'),
        // 'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
    ];
});


$factory->define(pjese::class, function (Faker $faker) {
    static $password;

    return [
        'automjeti_id' => $faker->numberBetween(0,100),
        'personeli_id' => $faker->numberBetween(0,200),
        'lloji' => $faker->word,
        'pershkrimi' => $faker->word,
        'shuma' => $faker->numberBetween(50,200),
        // 'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
    ];
});
