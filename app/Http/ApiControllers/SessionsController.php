<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('login');
        
    }


    public function destroy(){
        auth()->logout;
    }
}
