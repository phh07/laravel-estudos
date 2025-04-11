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
      <h4 class="text-light">Phflix</h4>
      <a href="{{ Route('painel.controle') }}">Painel de Controle</a>
      <a href="{{ Route('cliente.index') }}">Clientes</a>
      <a href="{{ Route('cliente.create') }}">Cadastrar Clientes</a>
      <a href="{{ Route('cliente.show') }}">Relatórios</a>
      <a href="#">Sair</a>
    </div>
    <div class="content flex-grow-1">
      <h2>Painel de Clientes</h2>
      <h5 class="mb-3">Lista de Clientes</h5>
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
          <tr>
            <td>1</td>
            <td>João da Silva</td>
            <td>000.000.000-00</td>
            <td>(41)90000-0000</td>
            <td>joao@email.com</td>
            <td><button class="btn btn-primary btn-sm">Editar</button></td>
            <td><button class="btn btn-danger btn-sm">Excluir</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
