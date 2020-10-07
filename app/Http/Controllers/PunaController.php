<?php

namespace App\Http\Controllers;

use App\puna;
use Illuminate\Http\Request;
use DB;

class PunaController extends Controller
{

    public function index()
    {
        $punas = DB::table('puna')->where('deleted_at', null)->get();

        return view('punet.index',compact('punas'));
    }


    public function create()
    {
        return view('punet.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'lloji'=>'required',
            'vendi'=>'required',
            'fuqia_njerzore'=>'required',
            'mjetet'=>'required',
        ]);

        $contact = new puna([
            'lloji' => $request->get('lloji'),
            'vendi' => $request->get('vendi'),
            'fuqia_njerzore' => $request->get('fuqia_njerzore'),
            'mjetet' => $request->get('mjetet'),
            'progresi'=> 0,
            'deleted_at'=> null
        ]);

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


    public function update(Request $request, $puna)
    {
        $request->validate([
            'progresi'=>'required'
        ]);

        $contact = puna::find($puna);
        $contact->progresi =  $request->get('progresi');

        $contact->save();
        return redirect('/punet')->with('success', 'Puna u editua');
    }


    public function updateProgres(Request $request, $puna)
    {
        $request->validate([
            'progresi'=>'required'
        ]);

        $contact = puna::find($puna);
        $contact->progresi =  $request->get('progresi');

        $contact->save();
        return redirect('/punet')->with('success', 'Puna u editua');
    }

    public function shtoProgres(Request $request, $puna)
    {
        $request->validate([
            'lloji'=>'required',
            'vendi'=>'required',
            'fuqia_njerzore'=>'required',
            'mjetet'=>'required',
        ]);

        $contact = puna::find($puna);
        $contact->nr_shasise =  $request->get('lloji');
        $contact->regjistrimi =  $request->get('vendi');
        $contact->lloji = $request->get('fuqia_njerzore');
        $contact->brendi = $request->get('mjetet');
        $contact->save();

        return redirect('/punet')->with('success', 'Puna u editua');
    }


    public function destroy(puna $puna)
    {
        $contact = puna::findOrFail($puna);
        $contact->delete();

        return redirect('/punet')->with('success', 'Puna u fshi');
    }
}
