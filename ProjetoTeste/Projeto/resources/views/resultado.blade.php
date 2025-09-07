<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $titulo }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="card shadow-sm">
        <div class="card-header">
            <h1>{{ $titulo }}</h1>
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Resultado:</h4>
                <p>{{ $resultado }}</p>
            </div>
            <hr>
            <a href="/" class="btn btn-primary">
                Voltar ao Menu
            </a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
