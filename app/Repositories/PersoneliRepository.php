<?php


namespace App\Repositories;


use App\Http\Requests\PersoneliRequest;
use App\Personeli;

class PersoneliRepository implements PersoneliRepositoryInterface
{

    public function getModel()
    {
        return new Personeli();
    }

    public function all()
    {
        return Personeli::all();
    }

    public function findById($personeli)
    {
        return Personeli::findOrFail($personeli);
    }

    public function create(PersoneliRequest $request)
    {
        $personeli = new Personeli($request->validated());

        $personeli->save();
    }

    public function update(PersoneliRequest $request,$personeli)
    {
        $personeli = Personeli::findOrFail($personeli);

        $personeli->update($request->validated());
    }

    public function delete($personeli)
    {
        Personeli::findOrFail($personeli)->delete();
    }

}
