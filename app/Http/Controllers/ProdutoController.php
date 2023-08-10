<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;


class ProdutoController extends Controller
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
}
