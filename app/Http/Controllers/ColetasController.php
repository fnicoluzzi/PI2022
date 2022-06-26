<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coleta;

class ColetasController extends Controller
{
    public function create(){
        return view('coletas.create');
    }

    public function store(Request $request){
        //dd($request->all());
        Coleta::create([
            'name'=> $request->name,
            'endereco'=> $request->endereco,
            'ddd'=> $request->ddd,
            'telefone'=> $request->telefone,
            'email'=> $request->email,
            'responsavel'=> $request->responsavel,
            'horario'=> $request->horario
        ]);
        return "Ponto de Coleta cadastrado com sucesso!";
    }

    public function show($id){
        $coleta = coleta::findOrFail($id);
        return view('coletas.show', ['coleta' => $coleta]);
    }
}
