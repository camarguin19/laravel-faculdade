<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function index()
    {
        $carros = Carros::all();
        //echo "chegou no controller carros";
        return view('carros.index', compact('carros'));
    }

    public function salvarCarro(Request $request)
    {
        $carro = new Carros();
        $carro->marca = $request->input('marca');
        $carro->modelo = $request->input('modelo');
        $carro->cor = $request->input('cor');
        $carro->ano_fabricacao = $request->input('ano_fabricacao');
        $carro->save();

        return redirect()->route('carros.index')->with('success', 'Carro cadastrado com sucesso!');
    }

    public function buscarCarro($id)
    {
        //dd($id);
        $carro = Carros::find($id);

        if (!$carro) {
            echo "Carro não encontrado";
        }
        return view('carros.alterar', compact('carro'));
    }
    public function alterarCarro(Request $req)
    {

        //validate
        $carro = Carros::find($req->input('id'));
        $carro->update($req->all());

        return redirect()->route('carros.index')->with('success', 'Carro alterado com sucesso!');


        /*
        $carro = Carros::find($req->input('id'));
        $carro->marca = $req->input('marca');
        $carro->modelo = $req->input('modelo');
        $carro->cor = $req->input('cor');
        $carro->ano_fabricacao = $req->input('ano_fabricacao');
        $carro->save();

        return redirect()->route('carros.index')->with('success', 'Carro alterado com sucesso!');*/
    }
    public function deletarCarro(Request $req, $id)
    {
        //dd($id);
        $carro = Carros::find($req->id);
        $carro->delete();

        return redirect()->route('carros.index')->with('success', 'Carro deletado com sucesso!');
    }
}
