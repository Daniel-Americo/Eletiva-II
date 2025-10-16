<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;

class AuthController extends Controller
{
    // 🔹 Exibe o formulário de login
    public function showFormLogin()
    {
        return view("clientes.login");
    }

    // 🔹 Exibe o formulário de cadastro
    public function showFormCadastro()
    {
        return view('clientes.cadastrar');
    }

    // 🔹 Cadastra novo usuário
    public function cadastrarUsuario(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:6',
            ]);

            $dados = $request->all();
            $dados['password'] = Hash::make($dados['password']);
            User::create($dados);

            return redirect()->route('login')->with("Sucesso", "Usuário cadastrado com sucesso!");
        } catch (Exception $e) {
            Log::error("Erro ao criar usuário: " . $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);

            return back()->withErrors(['Erro ao cadastrar o usuário.']);
        }
    }

    // 🔹 Realizar login
    public function login(Request $request)
    {
        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            $user = Auth::user(); //agora é um objeto do tipo usuario que inclui nivel de usuario
            if ($user->nivel =="ADM"){
                return redirect()->intended("/inicial-adm");
            } else if ($user->nivel == "CLI") {
                return redirect()->intended("/inicial-cli");
            }
        } else {
            return redirect()->route('login')->with('Erro', "Credenciais inválidas!");
        }
    }

    // 🔹 Faz logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("login");
    }
}
