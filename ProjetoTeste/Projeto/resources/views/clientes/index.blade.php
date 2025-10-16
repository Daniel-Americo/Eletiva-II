@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')

<div class="card">
  <div class="card-header d-flex justify-content-between align-items-center">
    <h1 class="h4 mb-0">Gerenciar Clientes</h1>
    {{-- Corrigido: Link de cadastro funcionando --}}
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">Cadastrar Novo Cliente</a>
  </div>
  <div class="card-body">

    {{-- Mensagens de sucesso ou erro --}}
    @if (session('sucesso'))
        <div class="alert alert-success">{{ session('sucesso') }}</div>
    @endif
    @if (session('erro'))
        <div class="alert alert-danger">{{ session('erro') }}</div>
    @endif

    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        {{-- Loop para exibir os clientes do banco de dados --}}
        @forelse ($clientes as $cliente)
          <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->NOME }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
              {{-- Corrigido: Links de ações usando a função route() --}}
              <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-info">Ver</a>
              <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">Editar</a>
              
              {{-- Formulário para o botão de excluir --}}
              <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="4" class="text-center">Nenhum cliente cadastrado.</td>
          </tr>
        @endforelse
      </tbody>
    </table>

  </div>
</div>

@endsection