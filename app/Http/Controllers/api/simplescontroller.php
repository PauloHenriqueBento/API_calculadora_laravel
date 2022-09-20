<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class simplescontroller extends Controller
{
    public function funcao(Request $request) {
        $resultado = $request->valor;

        return response() -> json([
            "status" => 200,
            "mensagem" => "metodo executado com sucesso",
            "resultado" => $resultado
        ], 200);
    }

    public function somar(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        if($valor1 && $valor2){
            $resultado = $valor1 + $valor2;
            //retorno caso não esteja vazio
            return response() -> json([
                "status" => 200,
                "mensagem" => "método executado com sucesso",
                "resultado" => $resultado
            ], 200);
        } else {
            //retorno caso vazio
            return response() -> json([
                "status" => 400,
                "mensagem" => "valor vazio",
            ], 400);
        }

    }

    public function subtrair(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        if($valor1 && $valor2){
            $resultado = $valor1 - $valor2;

            return response() -> json([
                "status" => 200,
                "mensagem" => "método executado com sucesso",
                "resultado" => $resultado
            ], 200);
        } else {
            //retorno caso vazio
            return response() -> json([
                "status" => 400,
                "mensagem" => "valor vazio",
            ], 400);
        }
    }

    public function multiplicar(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        if($valor1 && $valor2){
            $resultado = $valor1 * $valor2;

            return response() -> json([
                "status" => 200,
                "mensagem" => "método executado com sucesso",
                "resultado" => $resultado
            ], 200);
        } else {
            //retorno caso vazio
            return response() -> json([
                "status" => 400,
                "mensagem" => "valor vazio",
            ], 400);
        }
    }

    public function dividir(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        //Valor preenchido
        if($valor1 && $valor2){
            if($valor2 == 0){
                return response() -> json([
                    "status" => 400,
                    "mensagem" => "Não divisivel por 0",
                ], 400);
            }
            $resultado = $valor1 / $valor2;

            return response() -> json([
                "status" => 200,
                "mensagem" => "método executado com sucesso",
                "resultado" => $resultado
            ], 200);
        } else {
            return response() -> json([
                "status" => 400,
                "mensagem" => "valor vazio",
            ], 400);
        }
    }

    public function potencia(Request $request) {
        $base = $request->base;
        $expoente = $request->expoente;

        if($base && $expoente){
            $resultado = pow($base, $expoente);

            return response() -> json([
                "status" => 200,
                "mensagem" => "método executado com sucesso",
                "resultado" => $resultado
            ], 200);
        } else {
            return response() -> json([
                "status" => 400,
                "mensagem" => "valor vazio",
            ], 400);
        }
    }

    public function raizquadrada(Request $request) {
        $valor = $request->valor;

        if($valor){
            $resultado = sqrt($valor);

            return response() -> json([
                "status" => 200,
                "mensagem" => "método executado com sucesso",
                "resultado" => $resultado
            ], 200);
        } else {
            return response() -> json([
                "status" => 400,
                "mensagem" => "valor vazio",
            ], 400);
        }
    }

    public function raizqualquer(Request $request) {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        if($valor1 && $valor2){
            $resultado = pow($valor1, 1 / $valor2);

            return response() -> json([
                "status" => 200,
                "mensagem" => "método executado com sucesso",
                "resultado" => $resultado
            ], 200);
        } else {
            return response() -> json([
                "status" => 400,
                "mensagem" => "valor vazio",
            ], 400);
        }

    }
}
