<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroClienteController;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClientesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/templates', function () {
    return view('templates.index');
})->name('templates');

Route::get('/templates-admin', function () {
    return view('templates-admin.index');
});

Route::get('/produto', function () {
    return view('produto.index');
});

Route::get(
    '/clientes',
    [ClientesController::class, 'index']
)->name('clientes.index');

Route::get(
    '/cadastro-clientes',
    [CadastroClienteController::class, 'index']
)->name('cadastro_clientes.index');

Route::get(
    '/carros',
    [CarrosController::class, 'index']
)->name('carros.index');

Route::get(
    '/carros/cadastrar',
    function () {
        return view('carros.cadastrar');
    }
);
Route::get(
    '/carros/{id}',
    [CarrosController::class, 'buscarCarro']
)->name('carros.buscar');

Route::post(
    '/carros',
    [CarrosController::class, 'salvarCarro']
)->name('carros.novo');

Route::post(
    '/carros/alterar',
    [CarrosController::class, 'alterarCarro']
)->name('carros.alterar');

Route::get(
    '/carros/deletar/{id}',
    [CarrosController::class, 'deletarCarro']
)->name('carros.deletar');
