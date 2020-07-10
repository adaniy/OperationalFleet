<?php

namespace App\Http\Controllers;

use App\automjeti;
use Illuminate\Http\Request;
use DB;

class AutomjetiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $automjetets = DB::table('automjeti')->get();
        return view('automjetet.index',compact('automjetets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('automjetet.create');
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
            'nr_shasise'=>'required',
            'regjistrimi'=>'required',
            'lloji'=>'required',
            'brendi'=>'required',
            'viti'=>'required',
            'kilometrat'=>'required'
        ]);

        $contact = new automjeti([
            'nr_shasise' => $request->get('nr_shasise'),
            'regjistrimi' => $request->get('regjistrimi'),
            'lloji' => $request->get('lloji'),
            'brendi' => $request->get('brendi'),
            'viti' => $request->get('viti'),
            'aktiv'=> true,
            'kilometrat' => $request->get('kilometrat')
        ]);

        $contact->save();
        return redirect('/automjetet')->with('success', 'Automjeti u ruajt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function show(automjeti $automjeti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function edit($automjeti)
    {
        $contact = automjeti::find($automjeti);
        return view('automjetet.edit', compact('contact'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$automjeti)
    {
        $request->validate([
            'nr_shasise'=>'required',
            'regjistrimi'=>'required',
            'lloji'=>'required',
            'brendi'=>'required',
            'viti'=>'required',
            'kilometrat'=>'required'
        ]);

        $contact = automjeti::find($automjeti);
        $contact->nr_shasise =  $request->get('nr_shasise');
        $contact->regjistrimi =  $request->get('regjistrimi');
        $contact->lloji = $request->get('lloji');
        $contact->brendi = $request->get('brendi');
        $contact->viti = $request->get('viti');
        $contact->kilometrat = $request->get('kilometrat');
        $contact->save();

        return redirect('/automjetet')->with('success', 'Contact updated!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function destroy($automjeti)
    {
        $contact = automjeti::find($automjeti);
        $contact->delete();

        return redirect('/automjetet')->with('success', 'Contact deleted!');
    }
}
