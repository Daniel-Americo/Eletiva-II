@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')

  @if (session('Sucesso'))
    <div class="alert alert-success text-center">{{ session('Sucesso') }}</div>
  @endif

  <div class="text-center">
    <h1 class="fw-bold">Bem-vindo(a), {{ Auth::user()->name }}!</h1>
    <p class="lead mt-3">Você está logado no sistema Laravel.</p>
    <hr>
    <div class="mt-4">
      <a href="{{ route('clientes.index') }}" class="btn btn-success btn-lg">Gerenciar Clientes</a>
    </div>
  </div>

@endsection