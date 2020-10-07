<?php

use Illuminate\Database\Seeder;
use App\User;
use App\automjeti;
use App\personeli;
use App\karburanti;
use App\pjese;
use App\servisi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Automjeti::truncate();



        factory(User::class, 3)->create();
        factory(Automjeti::class, 20)->create();
        factory(Personeli::class, 20)->create();
        factory(Karburanti::class, 50)->create();
        factory(Servisi::class, 10)->create();
        factory(Pjese::class, 10)->create();
    }
}
