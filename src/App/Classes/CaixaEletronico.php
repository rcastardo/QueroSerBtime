<?php
namespace Btime\App\Classes;

/**
 *
 * http://dojopuzzles.com/problemas/exibe/caixa-eletronico/
 *
 *
 * Caixa Eletrônico
 *
 * Você está resolvendo este problema.
 * Este problema foi utilizado em 644 Dojo(s).
 * Desenvolva um programa que simule a entrega de notas quando um cliente efetuar um saque em um caixa eletrônico. Os requisitos básicos são os seguintes:
 * Entregar o menor número de notas;
 * É possível sacar o valor solicitado com as notas disponíveis;
 * Saldo do cliente infinito;
 * Quantidade de notas infinito (pode-se colocar um valor finito de cédulas para aumentar a dificuldade do problema);
 * Notas disponíveis de R$ 100,00; R$ 50,00; R$ 20,00 e R$ 10,00
 * Exemplos:
 * Valor do Saque: R$ 30,00 – Resultado Esperado: Entregar 1 nota de R$20,00 e 1 nota de R$ 10,00.
 * Valor do Saque: R$ 80,00 – Resultado Esperado: Entregar 1 nota de R$50,00 1 nota de R$ 20,00 e 1 nota de R$ 10,00.
 *
 */


/**
 * Description of CaixaEletronico
 *
 * @author reginaldo.castardo
 */
class CaixaEletronico
{
    /**
     *
     * @var array $notasDisponveis
     */
    private $notasDisponveis = [100, 50, 20, 10];

    /**
     * 
     */
    public function __construct() {}

    /**
     *
     * @param int $valor
     * @return array
     * @throws Exception
     */
    public function sacar(int $valor) :array
    {
        $notas = [];
        //verifica valores possíveis para saque
        if (!($valor % 10 == 0)) {
            throw new \Exception('Valor indisponível para saque.');
        }
        
        foreach ($this->notasDisponveis as $nota) {
            while ($nota <= $valor) {
               array_push($notas, $nota);
               $valor -= $nota;
           }
        }
        return $notas;
    }
}
