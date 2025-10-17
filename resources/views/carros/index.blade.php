@extends('layouts.base-admin')

@section('content')
    <div style="position: relative; z-index: 9999; background-color: white; padding: 20px;">
        <h1>Listagem de Carros</h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>Marca</td>
                    <td>Modelo</td>
                    <td>Cor</td>
                    <td>Ano</td>
                    <td>Opções</td>
                </tr>
            </thead>

            <tbody>

                @foreach ($carros as $linha)
                    <tr>
                        <td>{{ $linha->marca }}</td>
                        <td>{{ $linha->modelo }}</td>
                        <td>{{ $linha->cor }}</td>
                        <td>{{ $linha->ano_fabricacao }}</td>
                        <td><a href="{{ route('carros.buscar', $linha->id) }}" class='btn btn-primary'>Alterar</a></td>
                        <td><a href="{{ route('carros.deletar', $linha->id) }}" class='btn btn-danger'>Deletar</a></td>
                    </tr>
                @endforeach

        </table>
        </tbody>
    @endsection
