<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersoneliRequest;
use App\Personeli;
use App\Repositories\PersoneliRepository;
use Illuminate\Support\Facades\DB;

class PersoneliController extends Controller
{

    private $personeliRepository;

    public function __construct(PersoneliRepository $personeliRepository)
    {
        $this->personeliRepository = $personeliRepository;
    }



    public function index()
    {
        $personelis = $this->personeliRepository->all();

        return view('personeli.index',compact('personelis'));
    }


    public function store(PersoneliRequest $request)
    {
        $this->personeliRepository->create($request);

        return redirect('/personeli')->with('success', 'Personeli u ruajt');
    }


    public function edit($personeli)
    {
        $personelis = $this->personeliRepository->findById($personeli);

        return view('personeli.edit', compact('personelis'));
    }


    public function update(PersoneliRequest $request,$personeli)
    {
        $this->personeliRepository->update($request,$personeli);

        return redirect('/personeli')->with('success', 'Personeli u editua');
    }


    public function destroy($personeli)
    {
        $this->personeliRepository->delete($personeli);

        return redirect('/personeli')->with('success', 'Personeli u fshi');
    }
}
