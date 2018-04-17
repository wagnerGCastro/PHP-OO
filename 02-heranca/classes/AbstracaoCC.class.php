<?php

/**
 * AbstracaoCC [TIPO]
 * Descricao: Conceito de abstracao nas classes filhas
 * @copyright (c) 2016, Wagner 
 */
// aqui pega os mesmo paramentros de construct em Abstracao
class AbstracaoCC extends Abstracao {

    private $Limite;

    function __construct($Cliente, $Saldo, $Limite) {
        parent::__construct($Cliente, $Saldo);
        $this->Conta = 'Conta Corrente';
        $this->Limite = (float) $Limite;
    }

    final public function Sacar($valor){
        if($this->getSaldo() + $this->getLimite() >= (float) $valor):
            parent::Sacar($valor);
        else:
            echo "<span style='color:red'> <b> {$this->getConta()} </b> Erro ao sacar {$this->Real($valor)} saldo indisponível </span> <br>";
        endif;
     }
    
    /** @param Abstracao $destino */
    final public function Transferir($valor, $destino) {
        if($this->getSaldo() + $this->getLimite() >= (float) $valor):
            parent::Transferir($valor, $destino);
        else:
            echo "<span style='color:red'> <b> {$this->getConta()} </b> Erro ao trnasferir {$this->Real($valor)} saldo indisponível </span> <br>";
        endif;
        
    }

    public function VerSaldo() {
        parent::Extrato();
    }
    
    /* geters
    -----------------------------------------------------------------------*/
    public function getLimite() {
        return $this->Limite;
    }



}// end class
