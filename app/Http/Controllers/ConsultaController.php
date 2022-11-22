<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(){

        return view('consultas.index');

    }

    public function edit(){

        return view('consultas.edit');
    }

    public function create(){

        return view('consultas.create');

    }
}
