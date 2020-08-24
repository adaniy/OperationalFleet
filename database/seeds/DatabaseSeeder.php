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
        automjeti::truncate();
        
        $userQuantity = 200;
        $automjetetQuantity = 100;
        $personeliQuantity = 200;
        $karburantiQuantity = 100;
        $servisiQuantity = 100;
        $pjeseQuantity = 100;

        factory(User::class, $userQuantity)->create();
        factory(automjeti::class, $automjetetQuantity)->create();
        factory(personeli::class, $personeliQuantity)->create();
        factory(karburanti::class, $personeliQuantity)->create();
        factory(servisi::class, $personeliQuantity)->create();
        factory(pjese::class, $personeliQuantity)->create();
    }
}
