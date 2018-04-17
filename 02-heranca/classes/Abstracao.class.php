<?php

/* Esta classe não pode ser mais estanciada servira apenas de Herança
 * Super Class
 * Pode ter dentro desta class Abstrata (metodos Abstratos, classes, metodos finais)
 */
Abstract class Abstracao {
    private $Cliente;
    public $Conta;
    private $Saldo;

    function __construct($Cliente, $Saldo) {
        $this->Cliente = $Cliente;
        $this->Saldo = (float) $Saldo;
    }
    
    public function Depositar ($valor){
        $this->setSaldo($valor);
        echo "<span style='color:green';> <b> {$this->getConta()} </b> Depósito de {$this->Real($valor)} efetuado com sucesso</span> <br>";
    }
    
    public function Sacar($valor){
        $this->setSaldo($this->getSaldo() - $valor);
        echo "<span style='color:red'> <b> {$this->getConta()} </b> Saque de {$this->Real($valor)} efetuado com sucesso</span> <br>";
    }
    
    /** @param Abstracao $destino */
    public function Transferir($valor, $destino){
        if($this === $destino):
            echo "Você não pode transferir valores para a mesma conta ! <br>";
        else:
            echo "<hr>";
            $this->Sacar($valor);
            //obs: aqui o próprio parametro $destino(é um objeto) esta executando o metodo Depositar($valor) do próprio Objeto
            $destino->Depositar($valor);
            echo "<span style='color:blue' ;> <b> {$this->getConta()}:</b> transferência de {$this->Real($valor)} efetuada com sucesso de {$this->getCliente()} para {$destino->getCliente()}! </span> <br>";
            echo "<hr>";
        endif;
    }

    public function Extrato(){
        echo "<hr> Olá {$this->getCliente()}. Seu saldo em {$this->getConta()} é de {$this->getSaldo()} <hr>";
    }
    
    public function Real($valor){
        return "R$" .number_format($valor, '2',',','.');
    }
    
    /**
     * um metodo abstrato, não pode ter corpo aqui no pai, para poder passar as funções
     * uma classe que possua metodos abstratos, ela obriga as classes filhas(que herde esta classe) implemente ou inclua este metodo.
     * ou seja as classes filhas são obrigadas a ter esse metodo VerSaldo();
     */
    abstract public function VerSaldo();
        
    /* seters
    -----------------------------------------------------------------------*/
    public function setCliente($Cliente) {
        $this->Cliente = $Cliente;
    }

    public function setConta($Conta) {
        $this->Conta = $Conta;
    }

    public function setSaldo($Saldo) {
        $this->Saldo += (float) $Saldo;
    }

    /* geters
    -----------------------------------------------------------------------*/
    public function getCliente() {
        return $this->Cliente;
    }

    public function getConta() {
        return $this->Conta;
    }

    public function getSaldo() {
        return $this->Saldo;
    }

}
