<?php

/**
 * ResolucaoDeEscopoDigital.class [TIPO]
 * Descricao
 * @copyright (c) year, Wagner 
 */
class ResolucaoDeEscopoDigital extends ResolucaoDeEscopo  {
    public static $Digital;
    
    function __construct($Produto, $Valor) {
        parent::__construct($Produto, $Valor);
    }
    
    // metodos do objeto
    public function Vender(){
        self::setDigital(self::getDigital() + 1);
        parent::Vender();
    }
    
    // seters
    public static function setDigital($Digital) {
        self::$Digital = $Digital;
    }

    // geters
    public static function getDigital() {
        return self::$Digital;
    }
}
