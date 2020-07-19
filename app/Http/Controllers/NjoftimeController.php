<?php

namespace App\Http\Controllers;

use App\njoftime;
use Illuminate\Http\Request;

class NjoftimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('njoftime.njoftime');
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
     * @param  \App\njoftime  $njoftime
     * @return \Illuminate\Http\Response
     */
    public function show(njoftime $njoftime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\njoftime  $njoftime
     * @return \Illuminate\Http\Response
     */
    public function edit(njoftime $njoftime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\njoftime  $njoftime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, njoftime $njoftime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\njoftime  $njoftime
     * @return \Illuminate\Http\Response
     */
    public function destroy(njoftime $njoftime)
    {
        //
    }
}
