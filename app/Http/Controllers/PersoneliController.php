<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersoneliRequest;
use App\Personeli;
use Illuminate\Http\Request;
use DB;

class PersoneliController extends Controller
{

    public function index()
    {
        $personelis = Personeli::all();

        return view('personeli.index',compact('personelis'));
    }


    public function create()
    {
        //
    }


    public function store(PersoneliRequest $request)
    {
        $personeli = new Personeli($request->validated());

        $personeli->save();

        return view('personeli.index')->with('success', 'Personeli u ruajt');
    }


    public function show(personeli $personeli)
    {
        //
    }


    public function edit(personeli $personeli)
    {
        //
    }


    public function update(Request $request, personeli $personeli)
    {
        //
    }


    public function destroy(personeli $personeli)
    {
        //
    }
}
