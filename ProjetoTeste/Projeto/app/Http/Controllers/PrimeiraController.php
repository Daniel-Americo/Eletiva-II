<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{
    public function exercicio1() {
        return view("exercicio1");
    }
    public function respexercicio1(request $request) {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $soma = $valor1 + $valor2;
        return "Soma dos valores $valor1 + $valor2 = $soma";
    }

    public function exercicio2() {
        return view("exercicio2");
    }
    public function respexercicio2(request $request) {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $soma = $valor1 - $valor2;
        return "Subtração dos valores $valor1 - $valor2 = $soma";
    }

    public function exercicio3() {
        return view("exercicio3");
    }
    public function respexercicio3(request $request) {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $soma = $valor1 * $valor2;
        return "Subtração dos valores $valor1 * $valor2 = $soma";
    }

    public function exercicio4() {
        return view("exercicio4");
    }
    public function respexercicio4(request $request) {
        $valor2 = $request -> valor2;
        if($valor2 == 0) {
            return "ERROR, Impossivel dividir por 0!";
        }
        else {
            $valor1 = $request -> valor1;
            $divisao = $valor1 / $valor2;
            return "A divisão de $valor1 / $valor2 = $divisao";
        }
    }
}
