<?php

namespace App\Http\Controllers;

use App\Http\Middleware\TransformInput;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class ApiController extends Controller
{
    use ApiResponser;

    public function __construct()
    {

    }

}
