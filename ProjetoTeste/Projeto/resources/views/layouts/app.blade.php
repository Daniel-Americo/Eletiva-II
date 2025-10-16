<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Sistema Laravel')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      
      @auth
          @if (Auth::user()->nivel == 'ADM')
              <a class="navbar-brand fw-bold" href="{{ route('inicial-adm') }}">Sistema Laravel</a>
          @elseif (Auth::user()->nivel == 'CLI')
              <a class="navbar-brand fw-bold" href="{{ route('inicial-cli') }}">Sistema Laravel</a>
          @else
              <a class="navbar-brand fw-bold" href="/">Sistema Laravel</a>
          @endif
      @else
          <a class="navbar-brand fw-bold" href="{{ route('login') }}">Sistema Laravel</a>
      @endauth

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menuNavbar">
        <ul class="navbar-nav me-auto">
          
          @auth
              @if (Auth::user()->nivel == 'ADM')
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('inicial-adm') }}">🏠 Início</a>
                  </li>
              @elseif (Auth::user()->nivel == 'CLI')
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('inicial-cli') }}">🏠 Início</a>
                  </li>
              @endif
          @endauth
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('clientes.index') }}">👥 Clientes</a>
          </li>
        </ul>
        
        @auth
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger">🚪 Sair</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
        @endauth
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>