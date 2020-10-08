<?php


namespace App\Repositories;


use App\Personeli;

class PersoneliRepository
{

    public function getModel()
    {
        return new Personeli();
    }

    public function all()
    {
        return Personeli::all();
    }
}
