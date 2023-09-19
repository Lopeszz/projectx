<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));

    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->email = $request->email;
        $cliente->usuario = $request->usuario;
        $cliente->senha = $request->senha;
        $cliente->celular = $request->celular;
        $cliente->nivel_acesso = $request->nivel_acesso;
        $cliente->save();

        return redirect('/');
    }
}
