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

    public function exercicio5() {
        return view("exercicio5");
    }
    public function respexercicio5(request $request) {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $valor3 = $request -> valor3;
        $media = ($valor1 + $valor2 + $valor3) / 3;
        return "A Media é: $media";
    }

    public function exercicio6() {
        return view("exercicio6");
    }
    public function respexercicio6(request $request) {
        $valor1 = $request -> valor1;
        $f = ($valor1 * 9/5) + 32;
        return "A conversão de $valor1 Celsius para $f Fahrenheit ";
    }

    public function exercicio7() {
        return view("exercicio7");
    }
    public function respexercicio7(request $request) {
        $valor1 = $request -> valor1;
        $c = ($valor1 - 32) * 5/9;
        return "A conversão de $valor1 Fahrenheit para $c Celsius ";
    }

    public function exercicio8() {
        return view("exercicio8");
    }
    public function respexercicio8(request $request) {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $area = $valor1 * $valor2;
        return "A area do retangulo é $area ";
    }
    
    public function exercicio9() {
        return view("exercicio9");
    }
    public function respexercicio9(request $request) {
        $valor1 = $request -> valor1;
        $area = M_PI *( $valor1 * $valor1); 
        return "A area do circulo é $area ";
    } 

    public function exercicio10() {
        return view("exercicio10");
    }
    public function respexercicio10(request $request) {
        $valor1 = $request -> valor1;
        $valor2 = $request -> valor2;
        $p = 2 * ($valor1 + $valor2);
        return "O perimetro do Retangulo é $p ";
    }
    
    public function exercicio11() {
        return view("exercicio11");
    }
    public function respexercicio11(request $request) {
        $valor1 = $request -> valor1;
        $c = 2 * M_PI * $valor1;
        return "O perimetro do Circulo é $c ";
    } 
}
