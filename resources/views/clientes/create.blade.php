@extends('layouts.app')

@section('title', 'Criar Cliente')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

<div id="cliente-create-container" class="col-md-6 offset-md-3">
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Cliente:</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do Cliente">
        </div>

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" class="form-control" id="cpf" placeholder="CPF do Cliente">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email do Cliente">
        </div>

        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario do Cliente">
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha do Cliente">
        </div>

        <div class="form-group">
            <label for="celular">Celular:</label>
            <input type="text" name="celular" class="form-control" id="celular" placeholder="Celular do Cliente">
        </div>

        <div class="form-group">
            <label for="nivel_acesso">É Administrador?</label>
            <select name="nivel_acesso" id="nivel_acesso" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Cliente">
    </form>
</div>
@endsection

