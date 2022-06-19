<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ponto_retiraController extends Controller
{
    public function create(){
        return view('ponto__retiras.create');
    }
}
