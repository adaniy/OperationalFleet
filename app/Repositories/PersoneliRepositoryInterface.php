<?php

namespace App\Repositories;

use App\Http\Requests\PersoneliRequest;

interface PersoneliRepositoryInterface
{
    public function getModel();

    public function all();

    public function findById($personeli);

    public function create(PersoneliRequest $request);

    public function update(PersoneliRequest $request, $personeli);

    public function delete($personeli);
}
