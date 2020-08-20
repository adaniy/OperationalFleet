<?php

namespace App\Http\Controllers;

use App\puna;
use Illuminate\Http\Request;
use DB;

class ServisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servises = DB::table('servisi')->where('deleted_at', null)->get();
        
        return view('servisime.index',compact('servises'));
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
     * @param  \App\servisi  $servisi
     * @return \Illuminate\Http\Response
     */
    public function show(servisi $servisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servisi  $servisi
     * @return \Illuminate\Http\Response
     */
    public function edit(servisi $servisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servisi  $servisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servisi $servisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servisi  $servisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(servisi $servisi)
    {
        //
    }
}
