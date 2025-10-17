@extends('layouts.app')

@section('content')
    <h1>Bem vindo a Home</h1>
    <div class="container py-5">


        <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
            <div class="container-fluid py-5 text-center">
                <h1 class="display-5 fw-bold">Bem-vindo ao Meu Site</h1>
                <p class="col-md-8 fs-4 mx-auto">
                    Esta é a sua nova página inicial com Bootstrap 5.
                    Edite conforme desejar para mostrar produtos, clientes ou qualquer outro conteúdo.
                </p>
                <a href="{{ url('/clientes') }}" class="btn btn-primary btn-lg">Ver Clientes</a>
                <a href="{{ url('/produto') }}" class="btn btn-outline-secondary btn-lg">Ver Produtos</a>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de Clientes</h5>
                        <p class="card-text">Gerencie todos os clientes do sistema de forma simples e rápida.</p>
                        <a href="{{ url('/clientes') }}" class="btn btn-primary">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Gestão de Produtos</h5>
                        <p class="card-text">Visualize, edite e adicione produtos facilmente.</p>
                        <a href="{{ url('/produto') }}" class="btn btn-success">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Relatórios</h5>
                        <p class="card-text">Acompanhe os dados do sistema em tempo real.</p>
                        <a href="#" class="btn btn-warning">Ver Relatórios</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
