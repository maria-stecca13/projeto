<?php

namespace App;

/**
 * Classe Calculator - Operações matemáticas básicas
 * 
 * Exercício:
 * Crie uma classe de testes PHPUnit para esta classe.
 * Para cada método, escreva casos de teste que validem resultados esperados
 * e situações de erro quando aplicável.
 */
class Calculator
{
    /**
     * Soma dois números
     * 
     * O que testar:
     * - Soma de números positivos
     * - Soma de números negativos
     * - Soma com zero
     */
    public function somar($a, $b)
    {
        return $a + $b;
    }

    /**
     * Subtrai dois números
     * 
     * O que testar:
     * - Subtração simples (maior - menor)
     * - Subtração que gera número negativo
     */
    public function subtrair($a, $b)
    {
        return $a - $b;
    }

    /**
     * Multiplica dois números
     * 
     * O que testar:
     * - Multiplicação de positivos
     * - Multiplicação com zero
     * - Multiplicação com número negativo
     */
    public function multiplicar($a, $b)
    {
        return $a * $b;
    }

    /**
     * Divide dois números
     * 
     * O que testar:
     * - Divisão exata (ex: 6 / 3 = 2)
     * - Divisão com resultado decimal (ex: 5 / 2 = 2.5)
     * - Divisão por zero deve lançar exceção
     */
    public function dividir($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Divisão por zero não é permitida");
        }
        
        return $a / $b;
    }

    /**
     * Calcula a potência de um número
     * 
     * O que testar:
     * - Potência com expoente positivo (ex: 2^3)
     * - Potência com expoente zero (ex: qualquer número^0 = 1)
     * - Potência com expoente negativo (ex: 2^-2 = 0.25)
     */
    public function potencia($base, $expoente)
    {
        return pow($base, $expoente);
    }

    /**
     * Calcula a raiz quadrada de um número
     * 
     * O que testar:
     * - Raiz quadrada de número positivo (ex: 9 → 3)
     * - Raiz quadrada de zero (0 → 0)
     * - Raiz quadrada de número negativo deve lançar exceção
     */
    public function raizQuadrada($numero)
    {
        if ($numero < 0) {
            throw new \InvalidArgumentException("Não é possível calcular raiz quadrada de número negativo");
        }
        
        return sqrt($numero);
    }

    /**
     * Calcula o fatorial de um número
     * 
     * O que testar:
     * - Fatorial de 0 (0! = 1)
     * - Fatorial de 1 (1! = 1)
     * - Fatorial de um número maior (ex: 4! = 24)
     * - Fatorial de número negativo deve lançar exceção
     */
    public function fatorial($numero)
    {
        if ($numero < 0) {
            throw new \InvalidArgumentException("Fatorial não definido para números negativos");
        }
        
        if ($numero == 0 || $numero == 1) {
            return 1;
        }
        
        $resultado = 1;
        for ($i = 2; $i <= $numero; $i++) {
            $resultado *= $i;
        }
        
        return $resultado;
    }

    /**
     * Verifica se um número é par
     * 
     * O que testar:
     * - Número positivo par (ex: 4 → true)
     * - Número positivo ímpar (ex: 3 → false)
     * - Zero deve ser considerado par
     * - Números negativos (par e ímpar)
     */
    public function ehPar($numero)
    {
        return $numero % 2 == 0;
    }

    /**
     * Calcula a média de um array de números
     * 
     * O que testar:
     * - Média de vários números (ex: [1,2,3,4,5] → 3)
     * - Média de um único número (ex: [10] → 10)
     * - Array vazio deve lançar exceção
     */
    public function media($numeros)
    {
        if (empty($numeros)) {
            throw new \InvalidArgumentException("Array não pode estar vazio");
        }
        
        $soma = array_sum($numeros);
        $quantidade = count($numeros);
        
        return $soma / $quantidade;
    }

    /**
     * Encontra o maior número em um array
     * 
     * O que testar:
     * - Array com números positivos
     * - Array com números negativos
     * - Array misto (positivos e negativos)
     * - Array vazio deve lançar exceção
     */
    public function maiorNumero($numeros)
    {
        if (empty($numeros)) {
            throw new \InvalidArgumentException("Array não pode estar vazio");
        }
        
        return max($numeros);
    }
}
