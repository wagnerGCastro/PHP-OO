<?php

/* Aqui é uma classe filha da AbstracaoCC.
 * e consequentemente herda a Abstracao
 * ou seja herança tripla Abstracao->AbstracaoCC->AbstracaoCP
 */

class AbstracaoCP extends AbstracaoCC {

    public $Rendimento;

    function __construct($Cliente, $Saldo) {
        parent::__construct($Cliente, $Saldo, 0);
        $this->Conta = 'Conta Poupança';
        $this->Rendimento = 1.17;
    }

    final function Depositar($valor) {
        $juro = ($valor * ($this->getRendimento() / 100));
        $deposito = $valor + $juro;
        parent::Depositar($deposito);
        echo "<small style='color:#f0c'> Valor do Deposito: {$this->Real($valor)} || Rendimentos: {$juro }</small> <br>";
    }
    
    /* geters
    -----------------------------------------------------------------------*/
    public function getRendimento(){
        return $this->Rendimento;
    }

}
