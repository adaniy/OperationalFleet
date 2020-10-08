<?php

namespace App\Http\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\TransformInput;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;

class ApiController extends Controller
{
    use ApiResponser;

    public function __construct()
    {
        $this->middleware('api');
    }

}
