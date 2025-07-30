<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller333 extends Controller
{
    public function index()
    {
        return response()->json(['data' => 'Controller 333']);
    }
}
