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
        $coleta = Coleta::findOrFail($id);
        return view('coletas.show', ['coleta' => $coleta]);
    }

    public function edit($id){
        $coleta = Coleta::findOrFail($id);
        return view('coletas.edit', ['coleta' => $coleta]);
    }

    public function update(Request $request, $id){
        //dd($request->all());
        $coleta = Coleta::findOrFail($id);
        $coleta->update([
            'name'=> $request->name,
            'endereco'=> $request->endereco,
            'ddd'=> $request->ddd,
            'telefone'=> $request->telefone,
            'email'=> $request->email,
            'responsavel'=> $request->responsavel,
            'horario'=> $request->horario
        ]);
        return "Ponto de Coleta atualizado com sucesso!";
    }

    public function delete($id){
        $coleta = Coleta::findOrFail($id);
        return view('coletas.delete', ['coleta' => $coleta]);
    }

    public function destroy($id){
        $coleta = Coleta::findOrFail($id);
        $coleta->delete();
        return "Ponto de Coleta excluído com sucesso!";
    }
}
