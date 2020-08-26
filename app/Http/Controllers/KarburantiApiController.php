<?php

namespace App\Http\Controllers;

use App\Http\Middleware\TransformInput;
use App\karburanti;
use App\Transformers\KarburantiTransformer;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use DB;
use Illuminate\Support\Facades\Storage;

class KarburantiApiController extends ApiController
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('client.credentials')->only(['index','store']);

        $this->middleware('transform.input:' . KarburantiTransformer::class)->only(['store','update']);

        $this->middleware('scope:purchase-karburant')->only(['store','update']);

        $this->middleware('scope:manage-karburant')->except('index','store','show','update','destroy');

        $this->middleware('scope:read-general')->except('index');

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
        $karburantet = karburanti::all();

        return $this->showAll($karburantet);
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
        $request->validate([
            'nr_shasise'=>'required',
            'regjistrimi'=>'required|numeric',
            'lloji'=>'required',
            'brendi'=>'required',
            'viti'=>'required|numeric',
            'kilometrat'=>'required|numeric',
            'image'=>'required|image'
        ]);

        $contact = new automjeti([
            'nr_shasise' => $request->get('nr_shasise'),
            'regjistrimi' => $request->get('regjistrimi'),
            'lloji' => $request->get('lloji'),
            'brendi' => $request->get('brendi'),
            'viti' => $request->get('viti'),
            'aktiv'=> true,
            'image'=> $request->image->store(''),
            'kilometrat' => $request->get('kilometrat'),
        ]);
        if(automjeti::where('nr_shasise', $request->get('nr_shasise'))->exists() or automjeti::where('regjistrimi', $request->get('regjistrimi'))->exists()){
            return ['fail' => 'Automjeti ekziston'];
        }else{
            $contact->save();
        }
        return ['success' => 'Automjeti u ruajt'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\automjeti  $automjeti
     * @return \Illuminate\Http\Response
     */
    public function show(karburanti $id)
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
    public function destroy(karburanti $id)
    {
        $id->delete();

        return $this->showOne($id);
    }
}
