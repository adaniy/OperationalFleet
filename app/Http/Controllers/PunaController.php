<?php

namespace App\Http\Controllers;

use App\puna;
use Illuminate\Http\Request;
use DB;

class PunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $punas = DB::table('puna')->where('deleted_at', null)->get();
        
        return view('punet.index',compact('punas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('punet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\puna  $puna
     * @return \Illuminate\Http\Response
     */
    public function show(puna $puna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\puna  $puna
     * @return \Illuminate\Http\Response
     */
    public function edit(puna $puna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\puna  $puna
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\puna  $puna
     * @return \Illuminate\Http\Response
     */
    public function destroy(puna $puna)
    {
        //
    }
}
