<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;


class ClientesController extends Controller
{
    private $mensagem = "ola ";
    public function index()
    {
        $clientes = Clientes::all();
        //var_dump($carros);
        echo "chegou no controller cliente";
        return view('clientes.index', compact('clientes'));
    }
}
