<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  @vite('resources/css/show.css')
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
      <h2>Resultados</h2>
        @if(@session('sucessed'))
            <div class="alert alert-success">
                {{ session('sucessed') }}
            </div>
        @endif
    </div>
  </div>
</body>
</html>
