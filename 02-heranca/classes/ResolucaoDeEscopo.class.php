<?php

    // Conhecer as propriedades estácticas e como  acessar elas de forma correta

class ResolucaoDeEscopo {
    
    // atributos do Objeto
    public $Produto;
    public $Valor;
    
    // atributos da Classe. Não poderá ser acessado por objeto, somente por esta classe
    public static $Vendas;
    public static $Lucros;
    
    function __construct($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = (float) $Valor;
    }
    
    
    
    //metodos do objeto, será manipulado por qualquer objeto que estanciar a classe
    public function Vender(){
        self::setVendas( self::getVendas() + 1);
        self::setLucros($this->getValor() * self::getVendas());


        echo "<br> {$this->getProduto()} vendido por R$ {$this->getValor()}";
       // echo "<br>".self::$Lucros;
       // echo "<br>{$this->getValor()}";
    }
    
    // metodos da classe será apenas manipuldo pela classe
    
    /* não posso usar o $this, somente self:: e parent::, também não pode {self::getVendas()} 
     * precisa concatenar  echo "  ".self::getVendas()." R$ ";
     */
    public static function Relatorio(){
        echo "<hr>";
        echo "Este produto vendeu ". self::getVendas() ." unidade(s). Total R$ ".self::getLucros();
        echo "</hr>";
    }
    
    
    // seters
    public static function setVendas($Vendas) {
        self::$Vendas = $Vendas;
    }
    
    public static function setLucros($Lucros) {
        self::$Lucros = $Lucros;
    }

    // geters
    public function getProduto() {
        return $this->Produto;
    }

    public function getValor() {
        return $this->Valor;
    }

        
    public static function getVendas() {
        return self::$Vendas;
    }

    public static function getLucros() {
        return self::$Lucros;
    }
    
    


    
}
