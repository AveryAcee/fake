<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller307 extends Controller
{
    public function index()
    {
        return response()->json(['data' => 'Controller 307']);
    }
}
