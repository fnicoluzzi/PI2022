<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        //dd($request->all());
        usersController::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
        ]);
        return "Usuário cadastrado com sucesso!";
    }

}
