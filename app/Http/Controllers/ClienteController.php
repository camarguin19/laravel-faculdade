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
        $validador = $req->validate(
            [
                'nome' => 'required|min:3',
                'CPF' => 'required'
            ],
            [
                "nome.required" => "O campo nome é obrigatorio",
                "nome.min" => "Nome precisa possuir no minimo 3 caracteres",
                "cpf.required" => "O campo CPF é obrigatorio"

            ]

        );

        echo $req->input('nome');
        return redirect()->route("clientes")
            ->with('sucess', 'Cliente incluido com sucesso');
    }
}
