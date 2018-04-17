<?php

/**
 * PolimorfismoCartao.class [TIPO]
 * Descricao
 * @copyright (c) 2017/11/06, Wagner 
 */
class PolimorfismoCartao extends Polimorfismo {

    private $Juros;
    private $Encargos;
    private $Parcela;
    private $NumParcelas;

    function __construct($Produto, $Valor){
        parent::__construct($Produto, $Valor);
        $this->Juros = 1.17;
        $this->setMetodo('Cartão de Crédito');
    }
 
    /**
     * Polimorfismo (OverLoad) é a sobre carga (sobre reescreve o metodo Pai, neste caso Pagar() ).
     * Este evento acontece quando o metodo tem o mesmo nome, mas com parametro e tipos diferentes de retorno.
     * Ele realiza a mesma operação do metodo Pai mas de forma diferente.
     */
    public function Pagar($Parcelas = null){
       $this->setNumParcelas($Parcelas);
       $this->setEncargos();
       
       $this->setValor($this->getValor() + $this->getEncargos());
       $this->setParcela($this->getValor() / $this->getNumParcelas());
      
       echo "Você pagou {$this->Real($this->getValor())} por um {$this->getProduto()} <br>";
       echo "<small style='color: #09f'> Pagamento efetuado via {$this->getMetodo()} em {$this->getNumParcelas()}x iguais de {$this->Real($this->getParcela())} </small> ";
    }
    

    /* seters
    ----------------------------------------------------------------------- */
    /** para 5,5% informe 5.5 */
    public function setJuros($Juros) {
      $this->Juros = $Juros;
    }

    public function setEncargos() {
      $this->Encargos = ($this->getValor() * ($this->getJuros() / 100)) * $this->getNumParcelas();
    }
    
    public function setParcela($Parcela){
        $this->Parcela = $Parcela;
    }

    public function setNumParcelas($NumParcelas) {
      $this->NumParcelas = ( (int) $NumParcelas >= 1 ? $NumParcelas : 1 );
    }


    /* geters
    ----------------------------------------------------------------------- */

    public function getJuros() {
      return $this->Juros;
    }

    public function getEncargos() {
      return $this->Encargos;
    }

    public function getParcela() {
      return $this->Parcela;
    }

    public function getNumParcelas() {
      return $this->NumParcelas;
    }


} //end class
