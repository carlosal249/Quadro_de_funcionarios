<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class series_controler extends Controller
{
    public function index()
    {
        $series = [
           13 => 'Claudinho Bochecha',
           23 => 'Anderson Tilapia',
           9 => 'Sao Longuinho'
        ];
        
        $novos_funcionarios = 15;
        $novos_clientes = 13;
        

        // Dentro da pasta Series Busque o Index
        return view('series.index', [
            'series' => $series,
            'novos_funcionarios' => $novos_funcionarios,
            'novos_clientes' => $novos_clientes,
        ]);
    }

    public function add()
    {
        return view('series.add');
    }
}



?>