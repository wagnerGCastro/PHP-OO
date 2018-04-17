<?php

/**
 * Polimorfismo.class.php [TIPO]
 * Descricao
 * @copyright (c) year, Wagner 
 */
class Polimorfismo {

    private $Produto;
    private $Valor;
    private $Metodo;

    //COMPORTAMENTO iNICAL
    function __construct($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Metodo = 'Boleto';
    }

    public function Pagar() {
        
        echo "Você pagou {$this->Real($this->Valor)} pro um(a) curso {$this->Produto} <br>";
        echo "<small style='color: #09f'> Pagamento efetuado via {$this->getMetodo()}</small> <br> ";
    }

    public function Real($Valor) {
        return "R$ " . number_format($Valor, '2', '.', ',');
    }

    
    /* seters
    ----------------------------------------------------------------------- */
    public function setProduto($Produto) {
        $this->Produto = $Produto;
    }

    public function setValor($Valor) {
        $this->Valor = $Valor;
    }

    public function setMetodo($Metodo) {
        $this->Metodo = $Metodo;
    }

      
    
    /* geters
    ----------------------------------------------------------------------- */
    public function getProduto() {
      return $this->Produto;
    }

    public function getValor() {
      return $this->Valor;
    }

    public function getMetodo() {
      return $this->Metodo;
    }


}
