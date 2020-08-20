<?php

namespace App\Http\Controllers;

use App\personeli;
use Illuminate\Http\Request;
use DB;

class PersoneliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personelis = DB::table('personeli')->where('deleted_at', null)->get();
        
        return view('personeli.index',compact('personelis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\personeli  $personeli
     * @return \Illuminate\Http\Response
     */
    public function show(personeli $personeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\personeli  $personeli
     * @return \Illuminate\Http\Response
     */
    public function edit(personeli $personeli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personeli  $personeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personeli $personeli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\personeli  $personeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(personeli $personeli)
    {
        //
    }
}
