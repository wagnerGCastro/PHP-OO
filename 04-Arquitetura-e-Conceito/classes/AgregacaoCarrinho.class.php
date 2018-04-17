<?php

/**
 * Diferente da ASSOCIACAO, na AGREGAÇÃO não precisa ligar as classes por um atributo.
 * Vamos ligar as classes por requisição.
 * Mas é interessante ter atributos para gerenciar ou 
 * manipular eses objetos que vão entrar na nossa classe
 */
class AgregacaoCarrinho {
    private $Cliente;
    private $Produto;
    private $Total;
    
    // Quando abrir um carinho esse cliente tem que entrar 
    // aqui obriga que o clinente venha da associacao cliente. 
    // e não aceita que vem de outra classe, ou de objeto dinâmico 
    function __construct(AssociacaoCliente $Cliente){
        $this->Cliente = $Cliente;
        $this->Produto = array();
    }
    
    // metodos 
    public function addCarrinho(AgregacaoProduto $Produto){
        $this->setProduto($Produto);
        $this->setTotal($Produto->getValor());
        $this->verCarrinho($Produto, 'Adicionou');
    }
    
    public function removeCarrinho(AgregacaoProduto $Produto){
        //unset( $this->getProduto()[$Produto->getProduto()] );
        unset($this->Produto[$Produto->getProduto()]);
        $this->setTotal(-$Produto->getValor());
        $this->verCarrinho($Produto, 'Removeu');
    }
    
    public function verCarrinho(AgregacaoProduto $Produto, $action){
       echo "Você {$action} um {$Produto->getNome()} em seu carrinho. Valor R$ {$this->getTotal()} <hr>";
    }
    
    // seters
    private function setProduto($Produto) {
        $this->Produto[$Produto->getProduto()] = $Produto ;
    }

    private function setTotal($Total) {
        $this->Total += $Total;
    }

    // geters
    public function getCliente() {
        return $this->Cliente;
    }

    public function getProduto() {
        return $this->Produto;
    }

    public function getTotal() {
        return $this->Total;
    }
}
