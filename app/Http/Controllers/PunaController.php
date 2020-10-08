<?php

namespace App\Http\Controllers;

use App\Http\Requests\PunaRequest;
use App\puna;
use Illuminate\Http\Request;
use DB;

class PunaController extends Controller
{

    public function index()
    {
        $punas = Puna::all();

        return view('punet.index',compact('punas'));
    }


    public function create()
    {
        return view('punet.create');
    }


    public function store(PunaRequest $request)
    {
        $contact = new puna($request->validated());
        $contact->progresi = 0;

        $contact->save();

        return redirect('/punet')->with('success', 'Puna u ruajt me sukses!');
    }


    public function show(puna $puna)
    {
        //
    }

    public function edit(puna $puna)
    {
        //
    }


    public function update(PunaRequest $request, $puna)
    {
        $contact = Puna::findOrFail($puna);

        $contact->update($request->validated());

        return redirect('/punet')->with('success', 'Puna u editua');
    }

    public function shtoProgres($punaId)
    {
        $puna = Puna::findOrFail($punaId);

        return view('punet.shtoprogres',compact('puna'));
    }


    public function updateProgres(Request $request, $puna)
    {
        $request->validate([
            'progresi'=>'required'
        ]);

        $contact = Puna::findOrFail($puna);
        $contact->progresi =  $request->get('progresi');


        $contact->update();

        return redirect('/punet')->with('success', 'Punes iu shtua progres');
    }


    public function destroy($puna)
    {
        $contact = Puna::findOrFail($puna);

        $contact->delete();

        return redirect('/punet')->with('success', 'Puna u fshi');
    }
}
