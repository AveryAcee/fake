<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller3 extends Controller
{
    public function index()
    {
        return response()->json(['data' => 'Controller 3']);
    }
}
