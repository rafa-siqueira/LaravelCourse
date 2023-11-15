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
    
    public function create(){
        return view('jogos.create');
    }

    public function store(Request $request)
    {
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }
}
