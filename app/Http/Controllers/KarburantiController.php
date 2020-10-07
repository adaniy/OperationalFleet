<?php

namespace App\Http\Controllers;

use App\karburanti;
use App\automjeti;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use DB;

class KarburantiController extends Controller
{

    public function index()
    {
        $karburantis = DB::table('karburanti')->get();
        $automjetet = DB::table('automjeti')->get();
        $personelet = DB::table('personeli')->get();
        return view('karburanti.index',compact('karburantis'));
    }


    public function create()
    {
        $automjetet = DB::table('automjeti')->where('deleted_at',null)->get();
        $personelet = DB::table('personeli')->where('aktiv',1)->get();
        return view('karburanti.create',compact('automjetet','personelet'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'automjeti_id'=>'required',
            'personeli_id'=>'required',
            'litra'=>'required|numeric',
            'shuma'=>'required|numeric',
        ]);

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


    public function update(Request $request,$karburanti)
    {
        $request->validate([
            'automjeti_id'=>'required',
            'personeli_id'=>'required',
            'litra'=>'required',
            'shuma'=>'required',
            'kilometrat'=>'required',
        ]);

        $contact = karburanti::find($karburanti);
        $contact->automjeti_id =  $request->get('automjeti_id');
        $contact->personeli_id =  $request->get('personeli_id');
        $contact->litra = $request->get('litra');
        $contact->shuma = $request->get('shuma');
        $contact->kilometrat = $request->get('kilometrat');
        $contact->save();

        return redirect('/karburanti')->with('success', 'Njesia e Karburantit u editua');
    }


    public function destroy($karburanti)
    {
        $contact = karburanti::find($karburanti);
        $contact->delete();

        return redirect('/karburanti')->with('success', 'Njesia e Karburantit u fshi');
    }
}
