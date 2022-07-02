<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
//use App\Http\Controllers\Illuminate\Http\Request;

class Cadastro extends Component
{
    public $cep;
    public $logradouro;
    public $bairro;
    public $cidade;
    public $estado;
    public function buscaCep($cep){
        dd($this->cep);
        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json/');
        $dadosApi=$response->json();
        $this->logradouro=$dadosApi['logradouro'];
        $this->bairro=$dadosApi['bairro'];
        $this->cidade=$dadosApi['localidade'];
        $this->estado=$dadosApi['uf'];
        dd($dadosApi);
    }

    public function render()
    {
        return view('livewire.cadastro');
    }
}
