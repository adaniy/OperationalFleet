<?php

namespace App\Http\Controllers;

use App\automjeti;
use App\Http\Middleware\TransformInput;
use App\Transformers\AutomjetiTransformer;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use DB;
use Illuminate\Support\Facades\Storage;

class AutomjetiAPIController extends ApiController
{
    public function __construct()
    {


        $this->middleware('client.credentials')->only(['index','show']);

        $this->middleware('auth:api')->except(['index','show']);


        $this->middleware('transform.input:' . AutomjetiTransformer::class)->only(['store','update']);
    }


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
        $automjetets = automjeti::all();

        return $this->showAll($automjetets);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nr_shasise'=>'required',
            'regjistrimi'=>'required|numeric',
            'lloji'=>'required',
            'brendi'=>'required',
            'viti'=>'required|numeric',
            'kilometrat'=>'required|numeric',
            'image'=>'required|image'
        ];

        $this->validate($request,$rules);

        $newAutomjeti = automjeti::create($request-all());

            return $this->showOne($newAutomjeti,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function show(automjeti $id)
    {
//        $ans = ['automjeti' => automjeti::findOrFail($id)];
        return $this->showOne($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nr_shasise'=>'required',
            'regjistrimi'=>'required',
            'lloji'=>'required',
            'brendi'=>'required',
            'viti'=>'required',
            'kilometrat'=>'required'
        ]);

        $contact = automjeti::find($id);
        $contact->nr_shasise =  $request->get('nr_shasise');
        $contact->regjistrimi =  $request->get('regjistrimi');
        $contact->lloji = $request->get('lloji');
        $contact->brendi = $request->get('brendi');
        $contact->viti = $request->get('viti');
        $contact->kilometrat = $request->get('kilometrat');

        if($request->hasFile('image')){
            Storage::delete($contact->image);

            $contact->image = $request->image->store('');
        }


            $contact->save();


        return ['success'=> 'Automjeti u editua'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function destroy(automjeti $id)
    {
        $id->delete();

        return $this->showOne($id);
    }

}
