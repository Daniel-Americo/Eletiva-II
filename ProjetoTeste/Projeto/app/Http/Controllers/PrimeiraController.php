<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeiraController extends Controller
{
    public function menu()
    {
        return view("menu");
    }

    public function exercicio1()
    {
        return view("exercicio1");
    }
    public function respexercicio1(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        $resultado = "Soma dos valores $valor1 + $valor2 = $soma";
        return view('resultado', ['titulo' => 'Resultado Exercício 1', 'resultado' => $resultado]);
    }

    public function exercicio2()
    {
        return view("exercicio2");
    }
    public function respexercicio2(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $subtracao = $valor1 - $valor2;
        $resultado = "Subtração dos valores $valor1 - $valor2 = $subtracao";
        return view('resultado', ['titulo' => 'Resultado Exercício 2', 'resultado' => $resultado]);
    }

    public function exercicio3()
    {
        return view("exercicio3");
    }
    public function respexercicio3(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $multiplicacao = $valor1 * $valor2;
        $resultado = "Multiplicação dos valores $valor1 * $valor2 = $multiplicacao";
        return view('resultado', ['titulo' => 'Resultado Exercício 3', 'resultado' => $resultado]);
    }

    public function exercicio4()
    {
        return view("exercicio4");
    }
    public function respexercicio4(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if ($valor2 == 0) {
            $resultado = "ERROR, Impossivel dividir por 0!";
        } else {
            $divisao = $valor1 / $valor2;
            $resultado = "A divisão de $valor1 / $valor2 = $divisao";
        }
        return view('resultado', ['titulo' => 'Resultado Exercício 4', 'resultado' => $resultado]);
    }

    public function exercicio5()
    {
        return view("exercicio5");
    }
    public function respexercicio5(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;
        $media = ($valor1 + $valor2 + $valor3) / 3;
        $resultado = "A Média é: $media";
        return view('resultado', ['titulo' => 'Resultado Exercício 5', 'resultado' => $resultado]);
    }

    public function exercicio6()
    {
        return view("exercicio6");
    }
    public function respexercicio6(request $request)
    {
        $valor1 = $request->valor1;
        $f = ($valor1 * 9 / 5) + 32;
        $resultado = "A conversão de $valor1 Celsius para Fahrenheit é: $f";
        return view('resultado', ['titulo' => 'Resultado Exercício 6', 'resultado' => $resultado]);
    }

    public function exercicio7()
    {
        return view("exercicio7");
    }
    public function respexercicio7(request $request)
    {
        $valor1 = $request->valor1;
        $c = ($valor1 - 32) * 5 / 9;
        $resultado = "A conversão de $valor1 Fahrenheit para Celsius é: $c";
        return view('resultado', ['titulo' => 'Resultado Exercício 7', 'resultado' => $resultado]);
    }

    public function exercicio8()
    {
        return view("exercicio8");
    }
    public function respexercicio8(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $area = $valor1 * $valor2;
        $resultado = "A area do retangulo é: $area";
        return view('resultado', ['titulo' => 'Resultado Exercício 8', 'resultado' => $resultado]);
    }

    public function exercicio9()
    {
        return view("exercicio9");
    }
    public function respexercicio9(request $request)
    {
        $valor1 = $request->valor1;
        $area = M_PI * ($valor1 * $valor1);
        $resultado = "A area do circulo é: $area";
        return view('resultado', ['titulo' => 'Resultado Exercício 9', 'resultado' => $resultado]);
    }

    public function exercicio10()
    {
        return view("exercicio10");
    }
    public function respexercicio10(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $p = 2 * ($valor1 + $valor2);
        $resultado = "O perimetro do Retangulo é: $p";
        return view('resultado', ['titulo' => 'Resultado Exercício 10', 'resultado' => $resultado]);
    }

    public function exercicio11()
    {
        return view("exercicio11");
    }
    public function respexercicio11(request $request)
    {
        $valor1 = $request->valor1;
        $c = 2 * M_PI * $valor1;
        $resultado = "O perimetro do Circulo é: $c";
        return view('resultado', ['titulo' => 'Resultado Exercício 11', 'resultado' => $resultado]);
    }

    public function exercicio12()
    {
        return view("exercicio12");
    }
    public function respexercicio12(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $r = $valor1 ** $valor2;
        $resultado = "O $valor1 elevado a $valor2 é = $r";
        return view('resultado', ['titulo' => 'Resultado Exercício 12', 'resultado' => $resultado]);
    }

    public function exercicio13()
    {
        return view("exercicio13");
    }
    public function respexercicio13(request $request)
    {
        $valor1 = $request->valor1;
        $c = $valor1 * 100;
        $resultado = "$valor1 metros convertidos são $c centimetros";
        return view('resultado', ['titulo' => 'Resultado Exercício 13', 'resultado' => $resultado]);
    }

    public function exercicio14()
    {
        return view("exercicio14");
    }
    public function respexercicio14(request $request)
    {
        $valor1 = $request->valor1;
        $m = $valor1 * 0.621371;
        $resultado = "$valor1 Quilometros convertidos são $m milhas";
        return view('resultado', ['titulo' => 'Resultado Exercício 14', 'resultado' => $resultado]);
    }


    public function exercicio15()
    {
        return view("exercicio15");
    }
    public function respexercicio15(request $request)
    {
        $peso = $request->valor1;
        $alturaEmCm = $request->valor2;
        if($alturaEmCm > 0){
            $alturaEmMetros = $alturaEmCm / 100;
            $imc = $peso / ($alturaEmMetros * $alturaEmMetros);
            $imcArredondado = round($imc, 2);
            $resultado = "O IMC é: $imcArredondado";
        } else {
            $resultado = "Altura inválida!";
        }
        return view('resultado', ['titulo' => 'Resultado Exercício 15', 'resultado' => $resultado]);
    }

    public function exercicio16()
    {
        return view("exercicio16");
    }
    public function respexercicio16(request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valorDesc = $valor1 * ($valor2 / 100);
        $pFinal = $valor1 - $valorDesc;
        $resultado = "O preço com desconto é: R$ $pFinal";
        return view('resultado', ['titulo' => 'Resultado Exercício 16', 'resultado' => $resultado]);
    }

    public function exercicio17()
    {
        return view("exercicio17");
    }
    public function respexercicio17(request $request)
    {
        $capital = $request->valor1;
        $taxa = $request->valor2;
        $periodo = $request->valor3;
        $jurosSimples = $capital * ($taxa / 100) * $periodo;
        $jurosFormatado = number_format($jurosSimples, 2, ',', '.');
        $resultado = "O total de juros simples é: R$ $jurosFormatado";
        return view('resultado', ['titulo' => 'Resultado Exercício 17', 'resultado' => $resultado]);
    }
    
    public function exercicio18()
    {
        return view("exercicio18");
    }
    public function respexercicio18(request $request)
    {
        $capital = $request->valor1;
        $taxa = $request->valor2;
        $periodo = $request->valor3;
        $montante = $capital * (1 + $taxa / 100) ** $periodo;
        $montanteFormatado = number_format($montante, 2, ',', '.');
        $resultado = "O total do montante com juros compostos é: R$ $montanteFormatado";
        return view('resultado', ['titulo' => 'Resultado Exercício 18', 'resultado' => $resultado]);
    }
    
    public function exercicio19()
    {
        return view("exercicio19");
    }
    public function respexercicio19(request $request)
    {
        $dias = $request->valor1;
        $horas = $dias * 24;
        $minutos = $dias * 1440;
        $segundos = $dias * 86400;
        $resultado = "$dias dias equivalem a: $horas horas, $minutos minutos e $segundos segundos.";
        return view('resultado', ['titulo' => 'Resultado Exercício 19', 'resultado' => $resultado]);
    }

    public function exercicio20()
    {
        return view("exercicio20");
    }
    public function respexercicio20(request $request)
    {
        $distancia = $request->valor1;
        $tempo = $request->valor2;

        if($tempo > 0){
            $velocidade = $distancia / $tempo;
            $velocidadeFormatada = round($velocidade, 2);
            $resultado = "A velocidade média é de: $velocidadeFormatada km/h";
        } else {
            $resultado = "O tempo não pode ser zero.";
        }
        return view('resultado', ['titulo' => 'Resultado Exercício 20', 'resultado' => $resultado]);
    }
}

