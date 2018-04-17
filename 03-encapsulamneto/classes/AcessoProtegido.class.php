<?php

/**
 * AcessoProtegido.class [TIPO]
 * Conceitos: tras maior responsabilidade aos metodos,
 * segurança melhorada, eo compartilhamento desses atributos
 * e metodos, ou seja (dessas propriedades protegidas) se
 * dão apenas com as classes filhas, e não com objeto.
 * Aparti do momento que tem uma propriedade protected, ela 
 * não pode ser mais ultilizada pelo objeto. Ela é mais segura por isso.
 */
class AcessoProtegido {

    public $Nome;
    private $Idade;
    protected $Email;


    function __construct($Nome, $Idade, $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);
        $this->ValidaIdade($Idade);
    }

    public function setEmail($Email) {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            die('Email inválido !');
        } else {
            $this->Email = $Email;
        }
    }

    // acesso  pela propria classe, não pode ser acessado pelo Obejto 
    // pode ser acessado pelas class filhas
    final protected function setNome($Nome) {
        $this->Nome = $Nome;
    }
    
    
    // acesso somente pela propria classe, não pode ser acessado pelo Obejto 
    // e nem pelas class filhas
    private function setIdade($Idade) {
        $this->Idade = $Idade;
    }

       
    public function ValidaIdade($Idade){
        if(is_int($Idade)):
            $this->setIdade($Idade);
        else:
            die('Erro na idade !');
        endif;
    }

}


// nova class de exemplo
class AcessoProtegidoFilha extends AcessoProtegido {
    
    protected $CPF;
    
    // não é mais permitido reescrever, metodo pai pois esta com final,
    /*
    public function setNome() {
        echo 'Consegui';
    }
    */
    
    public function AddCpf($Nome, $Cpf) {
        parent::setNome($Nome);
        $this->CPF = $Cpf;
    }
 

}
