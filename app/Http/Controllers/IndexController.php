<?php

namespace CodeAgenda\Http\Controllers;


use CodeAgenda\Entities\Pessoa;

class IndexController extends Controller
{

    public function index($letra = "A")
    {
        $pessoas = Pessoa::where('apelido', 'like', "$letra%")->get();
        return view('agenda', compact('pessoas'));
    }

}