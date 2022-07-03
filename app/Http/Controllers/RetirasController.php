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
        return "Ponto de Retirada cadastrado com sucesso!<a href=/home_adm>Home</a>";
    }

    public function show($id){
        $retira = Retira::findOrFail($id);
        return view('retiras.show', ['retira' => $retira]);
    }

    public function edit($id){
        $retira = Retira::findOrFail($id);
        return view('retiras.edit', ['retira' => $retira]);
    }

    public function update(Request $request, $id){
        //dd($request->all());
        $retira = Retira::findOrFail($id);
        $retira->update([
            'name'=> $request->name,
            'endereco'=> $request->endereco,
            'ddd'=> $request->ddd,
            'telefone'=> $request->telefone,
            'email'=> $request->email,
            'responsavel'=> $request->responsavel,
            'horario'=> $request->horario
        ]);
        return "Ponto de Retirada atualizado com sucesso!<a href=/home_adm>Home</a>";
    }

    public function delete($id){
        $retira = Retira::findOrFail($id);
        return view('retiras.delete', ['retira' => $retira]);
    }

    public function destroy($id){
        $retira = Retira::findOrFail($id);
        $retira -> delete();
        return "Ponto de Retirada excluído com sucesso!<a href=/home_adm>Home</a>";
    }

    public function index()
    {
        $retiras = Retira::get();
        return view('retiras.index', compact('retiras'));
    }
    public function index_adm()
    {
        $retiras = Retira::get();
        return view('retiras.index_adm', compact('retiras'));
    }
}