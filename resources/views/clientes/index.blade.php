@extends('layouts.base-admin')

@section('title', 'Cadastro de Clientes')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Formulário de Cadastro</h1>

    {{-- Mensagens de erro --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Mensagem de sucesso --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Formulário --}}
    <form method="POST" action="{{ route('cliente.novo') }}" class="row g-3">
        @csrf

        <div class="col-md-6">
            <label for="nome" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo"
                value="{{ old('nome') }}">
        </div>

        <div class="col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"
                value="{{ old('cpf') }}">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com"
                value="{{ old('email') }}">
        </div>

        <div class="col-md-6">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
        </div>

        <div class="col-12">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua Exemplo, 123"
                value="{{ old('endereco') }}">
        </div>

        <div class="col-12">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento"
                placeholder="Apartamento, bloco, etc." value="{{ old('complemento') }}">
        </div>

        <div class="col-md-6">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade') }}">
        </div>

        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000"
                value="{{ old('cep') }}">
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
@endsection
