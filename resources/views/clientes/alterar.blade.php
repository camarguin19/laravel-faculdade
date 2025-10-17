@extends('layouts.base-admin')

@section('content')
    <h2>Alterar carro</h2>

    <div class="container">

        <form action={{ route('carros.alterar') }} method="POST">
            @csrf
            <input type="text" name="id" value="{{ $carro->id }} " />
            <div class="row">
                <span>Marca</span>
                <input type="text" name="marca" value="{{ $carro->marca }}" />
            </div>
            <div class="row">
                <span>Modelo</span>
                <input type="text" name="modelo" value="{{ $carro->modelo }}" />

            </div>
            <div class="row">
                <span>Cor</span>
                <input type="text" name="cor" value="{{ $carro->cor }}" />
            </div>
            <div class="row">
                <span>Ano de Fabricação</span>
                <input type="text" name="ano_fabricacao" value="{{ $carro->ano_fabricacao }}" />

            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Salvar alterações</button>
                <a class="btn btn-warning" href="{{ route('clientes.index') }}">Voltar</a>
            </div>
        </form>


    </div>
@endsection
