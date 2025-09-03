<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/templates', function () {
    return view('templates.index');
})->name('templates');

Route::get('/produto', function () {
    return view('produto.index');
});

Route::get('/clientes', function () {
    return view('clientes.index');
})->name('clientes');

Route::get('/templates-admin', function () {
    return view('templates-admin.index');
});

Route::get(
    '/cliente',
    [ClienteController::class, 'index']
);

Route::post(
    '/cliente',
    [ClienteController::class, 'recebeDados']
)->name('cliente.novo');
