<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adm;
use ColetasController;
use RetirasController;

class AdmsController extends Controller
{
    public function index_coleta()
    {
        $coletas = Coleta::get();
        return view('coletas.index', compact('coletas'));
    }

    public function index_retira()
    {
        $retiras = Adm::get();
        return view('retiras.index', compact('retiras'));
    }
}

