<?php

use PHPUnit_Framework_TestCase as PHPUnit;
use Btime\App\Classes\CaixaEletronico;

class CaixaEletronicoTest extends PHPUnit
{

    public function setUp()
    {
      $this->atm = new CaixaEletronico();
    }

    public function test_instance_of()
    {
      $this->assertInstanceOf('CaixaEletronico', $this->atm);
    }

    public function testSacarZero()
    {
        $this->assertEquals([], $this->atm->sacar(0));
    }

    public function testSacar2Reais()
    {
        $this->atm->sacar(2);
    }
    
    public function testSacar53Reais()
    {
        $this->atm->sacar(53);
    }

    public function testSacar10Espera_10()
    {
        $this->assertEquals([10], $this->atm->sacar(10));
    }

    public function testSacar20Espera_20()
    {
        $this->assertEquals([20], $this->atm->sacar(20));
    }

    public function testSacar100Espera_100()
    {
        $this->assertEquals([100], $this->atm->sacar(100));
    }

    public function testSacar40Espera_20_20()
    {
        $this->assertEquals([20, 20], $this->atm->sacar(40));
    }

    public function testSacar60Espera_50_10()
    {
        $this->assertEquals([50, 10], $this->atm->sacar(60));
    }

    public function testSacar80Espera_50_20_10()
    {
        $this->assertEquals([50, 20, 10], $this->atm->sacar(80));
    }
}
