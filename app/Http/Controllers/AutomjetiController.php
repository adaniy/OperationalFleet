<?php

namespace App\Http\Controllers;

use App\Automjeti;
use App\Http\Requests\AutomjetiRequest;
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


    public function store(AutomjetiRequest $request)
    {
        $contact = new Automjeti($request->validated());

        $contact->save();

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


    public function update(AutomjetiRequest $request,$automjeti)
    {
        $contact = automjeti::find($automjeti);

        $contact->update($request->validated());

        return redirect('/automjetet')->with('success', 'Automjeti u editua');
    }


    public function destroy($automjeti)
    {
        $contact = automjeti::findOrFail($automjeti);
        $contact->delete();

        return redirect('/automjetet')->with('success', 'Automjeti u fshi');
    }

}
