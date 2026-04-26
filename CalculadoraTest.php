<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/calculadora.php';

class CalculadoraTest extends TestCase {
    public function testSomar() {
        $calc = new Calculadora();
        $this->assertEquals(5, $calc->somar(2, 3));
    }
    public function testSubtrair() {
        $calc = new Calculadora();
        $this->assertEquals(1, $calc->subtrair(3, 2));
    }
    public function testMultiplicar() {
        $calc = new Calculadora();
        $this->assertEquals(6, $calc->multiplicar(2, 3));
    }
    public function testDividir() {
        $calc = new Calculadora();
        $this->assertEquals(2, $calc->dividir(6, 3));
    }
    public function testDividirPorZero() {
        $calc = new Calculadora();
        $this->assertEquals(0, $calc->dividir(6, 0));
    }
}
