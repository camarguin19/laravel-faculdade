@extends('layouts.base-admin')

@section('content')
    <div style="position: relative; z-index: 9999; background-color: white; padding: 20px;">
        <h2>Você está na view clientes</h2>

        <table border="1" cellpadding="5" cellspacing="0" style="border-collapse: collapse; width: 100%;">
            <thead>
                <tr>
                    <th>nome</th>
                    <th>email</th>
                    <th>telefone</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes as $linha)
                    <tr>
                        <td>{{ $linha->nome }}</td>
                        <td>{{ $linha->email }}</td>
                        <td>{{ $linha->telefone }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="text-align:center;">Nenhum carro encontrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
