<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro - Dark Mode</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  @vite('resources/css/create.css')
  @vite('resources/js/create.js')
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

        @if ($errors->any())
        <div class="alert alert-danger mx-auto mb-4" style="max-width: 300px; max-height: 150px;">
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <div class="content flex-grow-1">
          <div class="login-container">
            <h2>Criar Cliente</h2>
            <form action="{{ route('cliente.store') }}" method="POST">
                @csrf

              <div class="form-group">
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
              </div>
              <div class="form-group">
                <label for="cpf">Cpf:</label>
                <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
              </div>
              <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" value="{{ old('telefone') }}">
              </div>
              <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="text" id="nascimento" name="nascimento" maxlength="10" placeholder="aaaa/mm/dd" value="{{ old('nascimento') }}">
              </div>
              <input type="submit" class="login-btn" type="submit"></input>
            </form>
          </div>
        </div>
      </div>

</body>
</html>
