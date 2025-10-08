<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Log;
Use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showFormLogin(){
        return view("login");
    }

    public function showFormCadastro(){
        return view('cadastro');
    }

    public function cadastrarUsuario(Request $request){
        try {
            $dados = $request->all();
            $dados['password'] = Hash::make($dados['password']);
            User::Create($dados);
            return redirect()->route('login')->with("Sucesso", "Novo Usário Registrado");

        } catch (Exception $e){
            Log::error("Erro ao criar usuário: " .$e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'request' => $request->all()
            ]);
        }
    }

    public function login(Request $request){
        $credenciais = $request->only('email', 'password');

        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate();
            return redirect()->route('inicial');
        }else {
            return redirect()->route('login')-> with('Erro', "Credenciais Inválidas!");
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route("login");
    }
}
