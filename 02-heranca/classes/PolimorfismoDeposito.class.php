<?php

/**
 * PolimorfismoDeposito.class [TIPO]
 * Descricao
 * @copyright (c) year, Wagner 
 */
class PolimorfismoDeposito extends Polimorfismo {

    private $Desconto;

    function __construct($Produto, $Valor) {
        //importante parent::__construct na 1º linha
        parent::__construct($Produto, $Valor);
        $this->Desconto = 15;
        $this->setMetodo('Deposito');
    }

    /**
     * Polimorfismo (ou seja no OverRide) vai executar os mesmos metodos
     * os mesmos parametros, alterando apenas o comportamento do metodo Pai.
     * Polimorfou um metodo Pai.
     */
    public function Pagar() {
      $this->setValor( ($this->getValor() / 100) * 100 - $this->getDesconto() );
      parent::Pagar();
    }
    
    /* seters
    -----------------------------------------------------------------------*/
    public function setDesconto($Desconto) {
        $this->Desconto = $Desconto;
    }
    
    /* geters
    -----------------------------------------------------------------------*/
    public function getDesconto() {
      return  $this->Desconto;
    }

} //end class
