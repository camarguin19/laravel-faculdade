<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller

{
    private $mensagem = "ola ";
    public function index()
    {
        return view('clientes.index');
    }
    public function recebeDados(Request $req)
    {
        //$nome = $req->input('nome');
        $validar = $req->validate(
            [
                'nome' => 'required|min:3',
                'cpf' => 'required',
                'email' => 'required|email',
                'senha' => 'required',
                'endereco' => 'required',
                'cidade' => 'required',
                'cep' => 'required'

            ],
            [
                "nome.required" => "O campo nome é obrigatorio",
                "nome.min" => "Nome precisa possuir no minimo 3 caracteres",
                "cpf.required" => "O campo CPF é obrigatorio",
                "email.required" => "O campo email é obrigatorio",
                'email.email' => 'Por favor, insira um endereço de e-mail válido.',
                "senha.required" => "O campo senha é obrigatorio",
                "endereco.required" => "O campo endereço é obrigatorio",
                "cidade.required" => "O campo cidade é obrigatorio",
                "cep.required" => "O campo cep é obrigatorio"
            ]

        );

        return redirect()->route("clientes")
            ->with('success', 'Cliente incluido com sucesso');
    }
}
