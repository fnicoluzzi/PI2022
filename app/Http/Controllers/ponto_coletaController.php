<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ponto_coletaController extends Controller
{
        public function create(){
        return view('ponto__coletas.create');
    }
}
