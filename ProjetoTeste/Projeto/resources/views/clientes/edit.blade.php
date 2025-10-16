@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
<h1>Alterar Cliente</h1>
<form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
    @CSRF
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Informe o nome:</label>
        <input value="{{ $cliente -> nome }}" type="text" id="nome" name="nome" class="form-control" required="">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Informe o email:</label>
        <input value="{{ $cliente->email }}" type="email" id="email" name="email" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection