<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jogosController extends Controller
{
    public function index()
    {
        return view('jogos');
    }
}
