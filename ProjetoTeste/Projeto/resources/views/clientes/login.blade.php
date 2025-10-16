<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="card shadow-lg rounded-4">
          <div class="card-body p-4">
            <h3 class="text-center mb-4">Login</h3>

            {{-- Mensagens de sessão --}}
            @if (session('Erro'))
              <div class="alert alert-danger">{{ session('Erro') }}</div>
            @endif

            @if (session('Sucesso'))
              <div class="alert alert-success">{{ session('Sucesso') }}</div>
            @endif

            {{-- Erros de validação --}}
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            {{-- Formulário de Login --}}
            <form method="POST" action="/login">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required autofocus>
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control" required>
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>

              <div class="text-center mt-3">
                <a href="{{ route('cadastrar') }}">Criar conta</a>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
