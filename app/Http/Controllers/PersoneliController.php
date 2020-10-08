<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersoneliRequest;
use App\Personeli;
use App\Repositories\PersoneliRepository;
use Illuminate\Http\Request;
use DB;

class PersoneliController extends Controller
{

    private $personeliRepository;

    public function __construct(PersoneliRepository $personeliRepository)
    {
        $this->personeliRepository = $personeliRepository;
    }



    public function index()
    {
        $personelis = $this->personeliRepository->all();

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

        return redirect('/personeli')->with('success', 'Personeli u ruajt');
    }


    public function show(personeli $personeli)
    {
        //
    }


    public function edit($personeli)
    {
        $personelis = Personeli::find($personeli);
        return view('personeli.edit', compact('personelis'));
    }


    public function update(PersoneliRequest $request,$personeli)
    {
        $contact = Personeli::find($personeli);

        $contact->update($request->validated());

        return redirect('/personeli')->with('success', 'Personeli u editua');
    }


    public function destroy($personeli)
    {
        $contact = Personeli::findOrFail($personeli);
        $contact->delete();

        return redirect('/personeli')->with('success', 'Personeli u fshi');
    }
}
