<?php

/**
 * <br>DocumentcaoDeClasse:</br>
 * Essa Classe foi criada para mostrar a interação de objetos logo 
 * depois replicamos ela para ver a documentacao de classes com PHPDOC.
 * 
 * @copyright (c) 2015, Wagner.
 */
class DocumentacaoDeClasse {

    /** @var string Nome da empresa */
    public $Empresa;

    /**
     * Esse atributo é auto gerido pela classe e incrementa o número da classe.
     * @var int Número de funcionarios
     */
    public $Setores;

    /** @var InteracaoClasse Objeto vindo da classe InteracaoClasse */
    public $Funcionario;

    //Constrói a classe requisantando o nome da empresa
    function __construct($Empresa) {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    /**
     * <b>Contratar Funcionario: </b> Informe um objeto da classe InteracaoClasse,
     * o cargo e funcionario a ser contratado
     * @param object $Funcionario = Obejeto da classe InteracaoClasse
     * @param string $Cargo = profissao ou cargo a ocupar
     * @param float $Salario = Salario do Funcionario
     */
    public function Contratar($Funcionario, $Cargo, $Salario) {
        //aqui $this->Funcionario se tornou um object de InteracaoClasse.
        $this->Funcionario = (object) $Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
        $this->Setores += 1;
    }

    /**
     * <br>Pagar e obter salário:</br> Ao executar esse método o salário do funcionario
     * será pago. Você ainda poderá dar um echo neste mesmo para visualizar.
     * @return float Retorna o salario do contrado
     */
    public function Pagar() {
        $this->Funcionario->Receber($this->Funcionario->Salario);
        return $this->Funcionario->Salario;
    }

    public function Promover($Cargo, $Salario = null) {
        $this->Funcionario->Profissao = $Cargo;
        if ($Salario) {
            $this->Funcionario->Salario = $Salario;
        }
    }

    public function Funcionarios($Funcionario) {
        $this->Funcionario = (object) $Funcionario;
    }

    public function Demitir($Recisao) {
        $this->Funcionario->Receber($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -= 1;
    }

} //end class


