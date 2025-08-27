<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    private $mensagem = "ola ";
    public function index()
    {
        return view('clientes.index');
    }
    public function recebeDados(Request $req)
    {
        echo $req->input('nome');
        //echo 'recebe dados';
    }
}
