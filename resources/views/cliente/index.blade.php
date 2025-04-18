<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Dark Mode</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  @vite('resources/css/cliente.css')
</head>
<body>
  <div class="d-flex">
    <div class="sidebar p-3">
      <h4 class="text-light">Gerenc. de clientes</h4>
      <a href="{{ Route('painel.controle') }}">Painel de Controle</a>
      <a href="{{ Route('cliente.index') }}">Clientes</a>
      <a href="{{ Route('cliente.create') }}">Cadastrar Clientes</a>
      <a href="{{ Route('cliente.show') }}">Relatórios</a>
      <a href="#">Sair</a>
    </div>
    <div class="content flex-grow-1">
      <h2>Painel de Clientes</h2>
      @if(@session('sucessed'))
            <div class="alert alert-success">
                {{ session('sucessed') }}
            </div>
        @endif

    <form action="{{ Route('cliente.index') }}" method="get" class="mb-3 d-flex">
        <input type="text" name="search" id="search" class="form-control me-2 dark" placeholder="Buscar cliente">{{-- Busca de multiplos campos --}}
        <button type="submit" class="btn btn-outline-light" id="buscar">Buscar</button>
        <a href="{{ Route('cliente.create') }}" class="btn btn-outline-light" id="novo">Novo</a>
    </form>
    <br>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Excluir</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($cliente as $dado)
            <tr>
                <td>{{ $dado->id }}</td>
                <td>{{ $dado->nome }}</td>
                <td>{{ $dado->cpf }}</td>
                <td>{{ $dado->telefone }}</td>
                <td>{{ $dado->email }}</td>
                <td><a href="{{ Route('cliente.edit', ['cliente' => $dado->id]) }}" class="btn btn-primary btn-sm">Editar</a></td>
                <td>
                    <form action="{{ Route('cliente.destroy', ['cliente' => $dado->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </td>
              </tr>
            @empty
              <div class="alert alert-danger">
                <p>Nenhum cadastro encontrado!</p>
              </div>
            @endforelse

        </tbody>
      </table>
      {{-- ! links renderizara os links para o restante das paginas, é compativel com o tailwind css --}}
      {{ $cliente->links() }}

    </div>
  </div>
</body>
</html>
