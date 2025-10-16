<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Correção aplicada aqui

class NivelCliMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // A sua lógica está correta:
        // 1. Se o usuário NÃO estiver logado...
        // OU
        // 2. Se o nível do usuário logado NÃO for "CLI"...
        if (!Auth::check() || Auth::user()->nivel != "CLI") {
            // ...redireciona para a página de login.
            return redirect('/login');
        }

        // Se passar na verificação, permite que a requisição continue.
        return $next($request);
    }
}