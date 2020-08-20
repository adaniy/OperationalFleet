<?php

namespace App\Http\Controllers;

use App\pjese;
use Illuminate\Http\Request;
use DB;

class PjeseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pjeses = DB::table('pjese')->where('deleted_at', null)->get();
        
        return view('pjese.index',compact('pjeses'));
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
     * @param  \App\pjese  $pjese
     * @return \Illuminate\Http\Response
     */
    public function show(pjese $pjese)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pjese  $pjese
     * @return \Illuminate\Http\Response
     */
    public function edit(pjese $pjese)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pjese  $pjese
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pjese $pjese)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pjese  $pjese
     * @return \Illuminate\Http\Response
     */
    public function destroy(pjese $pjese)
    {
        //
    }
}
