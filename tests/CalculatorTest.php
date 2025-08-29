<?php
use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase{
    private $calculator;

    protected function setUp(): void {
        $this->calculator = new Calculator();
    }


    // Somar 
    public function testSomar(){
        $a = 5;
        $b = 3;
        $esperado = 8;

        $resultado= $this->calculator->somar($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }


    // Somar com números negativos
    public function somaNumerosNegativos(){
        $a = -2;
        $b = -4;
        $esperado = -6;

        $resultado= $this->calculator->somar($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }

    public function somaComZero(){
        $a = 2;
        $b = 0;
        $esperado = 2;

        $resultado= $this->calculator->somar($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }

    public function testSubtrair(){
        $a = 8;
        $b = 2;
        $esperado = 6;

        $resultado= $this->calculator->subtrair($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }

    public function subtrairNumerosNegativos(){
        $a = -2;
        $b = 4;
        $esperado = -6;

        $resultado= $this->calculator->somar($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }

    public function testMultiplicar(){
        $a = 2;
        $b = 5;
        $esperado = 10;

        $resultado= $this->calculator->multiplicar($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }  

    public function multiplicarComZero(){
        $a = 5;
        $b = 0;
        $esperado = 0;

        $resultado= $this->calculator->multiplicar($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }

    public function multiplicarNumerosNegativos(){
        $a = -2;
        $b = 2;
        $esperado = -4;

        $resultado= $this->calculator->multiplicar($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }

    public function testDivisao(){
        $a = 6;
        $b = 3;
        $esperado = 2;

        $resultado= $this->calculator->dividir($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }

    public function divisaoComDecimal(){
        $a = 5;
        $b = 2;
        $esperado = 2.5;

        $resultado= $this->calculator->dividir($a,$b);
        $this -> assertEquals($esperado, $resultado);
    }


    // Teste para divisão por zero, com exceção, não vai retornar o valor
    public function divisaoPorZero(){
        $this->expectException(InvalidArgumentException::class);
        $a = 5;
        $b = 0; 

        $this->calculator->dividir($a, $b);

    }

    public function testPotencia(){
        $base = 2;
        $expoente = 3;
        $esperado = 8;

        $resultado= $this->calculator->potencia($base,$expoente);
        $this -> assertEquals($esperado, $resultado);
    }

    public function potenciaComExpoenteZero(){
        $base = 2;
        $expoente = 0;
        $esperado = 1;

        $resultado= $this->calculator->potencia($base,$expoente);
        $this -> assertEquals($esperado, $resultado);
    }

    public function potenciaComExpoenteNegativo(){
        $base = 2;
        $expoente = -2;
        $esperado = 0.25;

        $resultado= $this->calculator->potencia($base,$expoente);
        $this -> assertEquals($esperado, $resultado);
    }        

    public function testRaizQuadrada(){
        $numero = 16;
        $esperado = 4;

        $resultado= $this->calculator->raizQuadrada($numero);
        $this -> assertEquals($esperado, $resultado);
    }

    public function RaizQuadradaDeZero(){
        $numero = 0;
        $esperado = 0;

        $resultado= $this->calculator->raizQuadrada($numero);
        $this -> assertEquals($esperado, $resultado);
    }

    public function RaizQuadradaDeNumeroNegativo(){    
        $this->expectException(InvalidArgumentException::class);
        $numero = -5; 

        $this->calculator->raizQuadrada($numero);
    }

    public function FatorialDeZero(){
        $numero = 0;
        $esperado = 1;

        $resultado= $this->calculator->fatorial($numero);
        $this -> assertEquals($esperado, $resultado);
    }

    public function FatorialDeUm(){
        $numero = 1;
        $esperado = 1;

        $resultado= $this->calculator->fatorial($numero);
        $this -> assertEquals($esperado, $resultado);
    }

    public function testFatorial(){
        $numero = 4;
        $esperado = 24;

        $resultado= $this->calculator->fatorial($numero);
        $this -> assertEquals($esperado, $resultado);
    }

    public function FatorialDeNumNegativo(){
        $this->expectException(InvalidArgumentException::class);
        $numero = -5; 

        $this->calculator->fatorial($numero);
    }

    // teste para ver se o número é par, usando o assertTrue(serve para verdadeiro)
    public function testNumeroPositivoPar(){
        $numero = 4;
        $this->assertTrue($this->calculator->ehPar($numero));
    }

    public function testNumeroPositivoImpar(){
        $numero = 3;
        $this->assertFalse($this->calculator->ehPar($numero));
    }

    public function testZeroEhPar()
    {
        $numero = 0;
        $this->assertTrue($this->calculator->ehPar($numero));
    }

    public function testNumeroNegativoPar()
    {
        $numero = -8;
        $this->assertTrue($this->calculator->ehPar($numero));
    }

    public function testNumeroNegativoImpar()
    {
        $numero = -7;
        $this->assertFalse($this->calculator->ehPar($numero));
    }

    public function testMediaDeVariosNumeros(){
        $numeros = [10, 5, 10, 5, 10];
        $esperado = 8;

        $resultado = $this->calculator->media($numeros);

        $this->assertSame($esperado, $resultado);
    }

    public function testMediaDeUmUnicoNumero(){
        $numeros = [10];
        $esperado = 10;

        $resultado = $this->calculator->media($numeros);

        $this->assertSame($esperado, $resultado);
    }

    public function testMediaDeArrayVazio(){
        $this->expectException(\InvalidArgumentException::class);

        $this->calculator->media([]);
    }

    public function testMaiorNumeroPositivos(){
        $numeros = [1, 2, 3, 4, 5];
        $esperado = 5;

        $resultado = $this->calculator->maiorNumero($numeros);

        $this->assertSame($esperado, $resultado);
    }

    public function testMaiorNumeroNegativos(){
        $numeros = [-10, -3, -50, -1];
        $esperado = -1;

        $resultado = $this->calculator->maiorNumero($numeros);

        $this->assertSame($esperado, $resultado);
    }

  
    public function testMaiorNumeroMisto(){
        $numeros = [-10, 5, 0, 3];
        $esperado = 5;

        $resultado = $this->calculator->maiorNumero($numeros);

        $this->assertSame($esperado, $resultado);
    }

    
    public function testMaiorNumeroArrayVazio(){
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Array não pode estar vazio");

        $this->calculator->maiorNumero([]);
    }


}