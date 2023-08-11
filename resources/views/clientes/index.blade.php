@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
    <h1>Lista de Clientes</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Usuário</th>
                <th>Celular</th>
                <th>Nível de Acesso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cpf }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->usuario }}</td>
                    <td>{{ $cliente->celular }}</td>
                    <td>{{ $cliente->nivel_acesso ? 'Sim' : 'Não' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
