<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller209 extends Controller
{
    public function index()
    {
        return response()->json(['data' => 'Controller 209']);
    }
}
