<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //* Index, mostra todos registros do banco
    public function index(Request $request)
    {
        //* tipo da pesquisa
        $pesquisa = $request->input('search');

        //*buscar informações do banco

        //! O like é um tipo de consulta do bd, o % % antes e depois significa que está procurando o termo em qualquer lugar que apareça
        $cliente = Cliente::where('nome', 'like', '%' . $pesquisa . '%')->orWhere('cpf', 'like', '%' . $pesquisa . '%')->
        orWhere('email', 'like', '%' . $pesquisa . '%')->orWhere('telefone', 'like', '%' . $pesquisa . '%')->
        orWhere('nascimento', 'like', '%' . $pesquisa . '%')->

        orderBy('id')->paginate(10);

        //* retorna as info na view
        return view('cliente/index', ['cliente' => $cliente]);
    }

    //* Retorna o form de criação
    public function create()
    {
        return view('cliente/create');
    }

    //* Mostrar resultados
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

        //* Redirecionamento
        return redirect()->route('cliente.show')->with('sucessed', 'Cliente cadastrado com sucesso');
    }

    //* Visualizar dados a partir do id
    public function edit(Cliente $cliente)
    {
        //! Atribui o model a cliente, e será possivel usar na view para ler o dados já cadastrados
        return view('cliente/edit', ['cliente' => $cliente]);
    }

    public function update(Cliente $cliente, ClienteRequest $request)
    {
        $request->validated();

        $cliente->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'nascimento' => $request->nascimento
        ]);

        return redirect()->route('cliente.index')->with('sucessed', 'Dados do cliente atualizado!');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('cliente.index')->with('sucessed', 'cliente deletado com sucesso!');
    }

}
