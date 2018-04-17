<?php

/**
 * Conceito do private, tem responsabilidade total sobre os atributos.
 * Ou seja voce não consegue visualizar  e nem manipular qualquer atributo fora da classe.
 * Somente de dentro da classe e nem nas heranças, não pode acessar atributo ou metodo
 * somente a propria classe, responsabilidade total.
 */
class AcessoPrivado {

    private $Nome;
    private $Email;
    private $Cpf;

    function __construct($Nome, $Email, $Cpf) {
        $this->setNome($Nome);
        $this->setEmail($Email);
        $this->setCpf($Cpf);
    }

    public function setNome($Nome) { //aqui responsabilizamos com public
        //protected function setNome($Nome) { //acessa somente das classes filhas
        if ($Nome !== "" && is_string($Nome)) {
            $this->Nome = $Nome;
        } else {
            die('Erro no Nome');
        }
    }

    public function setEmail($Email) {

        // Remove all illegal characters from email
        $newEmail = filter_var($Email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
            $this->Email = $newEmail;
        } else {
            die('Erro no e-mail !');
        }
    }

    //expresão regular javascript
    public function setCpf($Cpf) {
        if (preg_match('/[0-9]*/i', $Cpf) && strlen($Cpf) == 11) {
            $this->Cpf = $Cpf;
        } else {
            die('Erro no CPF! ');
        }
    }

}
