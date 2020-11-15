<?php

namespace App\Http\Controllers;

use App\Http\Requests\KarburantiRequest;
use App\karburanti;
use App\Personeli;
use Illuminate\Support\Facades\DB;

class KarburantiController extends Controller
{

    public function index()
    {
        $karburantis = Karburanti::all();

        return view('karburanti.index',compact('karburantis'));
    }


    public function create()
    {
        $automjetet = DB::table('automjeti')->where('deleted_at',null)->get();
        $personelet = Personeli::all();
        return view('karburanti.create',compact('automjetet','personelet'));
    }


    public function store(KarburantiRequest $request)
    {

        //test
        $request->validated();

        $automjet = explode(", ",$request->get('automjeti_id'));
        $personel = explode(", ",$request->get('personeli_id'));

        $contact = new karburanti([
            'automjeti_id' => $automjet[0],
            'personeli_id' => $personel[0],
            'litra' => $request->get('litra'),
            'shuma' => $request->get('shuma'),
        ]);

        $contact->save();

        return redirect('/karburanti')->with('success', 'Njesia e Karburantit u ruajt');
    }


    public function show(karburanti $karburanti)
    {
        //
    }


    public function edit($karburanti)
    {
        $contact = karburanti::find($karburanti);

        return view('karburanti.edit', compact('contact'));
    }


    public function update(KarburantiRequest $request,$karburanti)
    {
        $contact = karburanti::find($karburanti);

        $contact->update($request->validated());

        return redirect('/karburanti')->with('success', 'Njesia e Karburantit u editua');
    }


    public function destroy($karburanti)
    {
        $contact = Karburanti::findOrFail($karburanti);

        $contact->delete();

        return redirect('/karburanti')->with('success', 'Njesia e Karburantit u fshi');
    }
}
