<?php

namespace App\Http\Controllers;

use App\Automjeti;
use Illuminate\Http\Request;
use DB;

class AutomjetiController extends Controller
{

    public function index()
    {
        $automjetets = DB::table('automjeti')->where('deleted_at', null)->get();

        return view('automjetet.index',compact('automjetets'));

    }


    public function create()
    {
        return view('automjetet.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nr_shasise'=>'required',
            'regjistrimi'=>'required|integer',
            'lloji'=>'required',
            'brendi'=>'required',
            'viti'=>'required|integer',
            'kilometrat'=>'required|integer',
        ]);

        $contact = new automjeti([
            'nr_shasise' => $request->get('nr_shasise'),
            'regjistrimi' => $request->get('regjistrimi'),
            'lloji' => $request->get('lloji'),
            'brendi' => $request->get('brendi'),
            'viti' => $request->get('viti'),
            'aktiv'=> true,
            'deleted_at'=> null,
            'kilometrat' => $request->get('kilometrat'),
        ]);
        if(automjeti::where('nr_shasise', $request->get('nr_shasise'))->exists() or automjeti::where('regjistrimi', $request->get('regjistrimi'))->exists()){
            return redirect('/automjetet')->with('failure', 'Automjeti ekziston');
        }else{
            $contact->save();
        }
        return redirect('/automjetet')->with('success', 'Automjeti u ruajt');
    }


    public function show($automjeti)
    {

    }


    public function edit($automjeti)
    {
        $contact = automjeti::find($automjeti);
        return view('automjetet.edit', compact('contact'));
    }


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

        return redirect('/automjetet')->with('success', 'Automjeti u editua');
    }


    public function destroy($automjeti)
    {
        $contact = automjeti::findOrFail($automjeti);
        $contact->delete();

        return redirect('/automjetet')->with('success', 'Automjeti u fshi');
    }

}
