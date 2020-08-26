<?php

namespace App\Http\Controllers;

use App\User;
use App\Transformers\UserTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends ApiController
{
    public function __construct()
    {
        parent::__construct();

        $this->middleware('client.credentials')->only(['store','resend']);

        $this->middleware('transform.input:' . UserTransformer::class)->only(['store','update']);
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
        $users = User::all();

        return $this->showAll($users);
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

        $contact = new User([
            'nr_shasise' => $request->get('nr_shasise'),
            'regjistrimi' => $request->get('regjistrimi'),
            'lloji' => $request->get('lloji'),
            'brendi' => $request->get('brendi'),
            'viti' => $request->get('viti'),
            'aktiv'=> true,
            'image'=> $request->image->store(''),
            'kilometrat' => $request->get('kilometrat'),
        ]);

        if(User::where('nr_shasise', $request->get('nr_shasise'))->exists() or User::where('regjistrimi', $request->get('regjistrimi'))->exists()){
            return $this->showOne($contact,201);
        }else{
            $contact->save();
        }
        return ['success' => 'User u ruajt'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $id)
    {
//        $ans = ['User' => User::findOrFail($id)];
        return $this->showOne($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
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

        $contact = User::find($id);
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


        return ['success'=> 'User u editua'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {
        $id->delete();

        return $this->showOne($id);
    }

}
