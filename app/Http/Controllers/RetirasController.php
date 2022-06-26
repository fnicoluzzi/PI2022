<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retira;

class RetirasController extends Controller
{
    public function create(){
        return view('retiras.create');
    }

    public function store(Request $request){
        //dd($request->all());
        Retira::create([
            'name'=> $request->name,
            'endereco'=> $request->endereco,
            'ddd'=> $request->ddd,
            'telefone'=> $request->telefone,
            'email'=> $request->email,
            'responsavel'=> $request->responsavel,
            'horario'=> $request->horario,
        ]);
        return "Ponto de Retirada cadastrado com sucesso!";
    }
}