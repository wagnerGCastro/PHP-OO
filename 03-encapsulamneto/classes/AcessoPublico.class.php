<?php

/**
 * AcessoPublico.class [TIPO]
 * Descricao
 * @copyright (c) year, Wagner 
 */

/**
 * ter uma classe resposável pelo seus atributos;
 * O encapsulamento no PHP 5 traz os modificadores de acesso.
 * public, protected, private;
 */
//concetos de modificadores

class AcessoPublico {

    public $Nome;
    public $Email;

    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);  // aplicando resposabilidade clara
        //$this->Email = $Email;  // não está aplicado responsabilidade clara
    }

    /** @responsabilidade clara está aplicada mas não a classe */
    public function setEmail($Email) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            die('Email inválido !');
        } else {
            $this->Email = $Email;
        }
    }

}
