<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jogo;

class jogosController extends Controller
{
    public function index()
    {
        $jogos = jogo::all();
        return view('jogos.index', compact('jogos'));
    }    
}
