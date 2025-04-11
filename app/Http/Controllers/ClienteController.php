<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente/index');
    }

    public function create()
    {
        return view('cliente/create');
    }

    //mostrar resultados
    public function show()
    {
        return view('cliente/show');
    }
    //* Salvar no banco
    public function store(ClienteRequest $request)
    {
        //* Validar campos
        $request->validated();
        //* Salvar no banco
        Cliente::create($request->all());

        //! Redirecionamento
        return redirect()->route('cliente.show')->with('sucessed', 'Cliente cadastrado com sucesso');
    }

}
