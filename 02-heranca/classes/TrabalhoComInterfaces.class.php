<?php

/**
 * TrabalhoComInterface.class [TIPO]
 * Descricao
 * @copyright (c) 22/02/2016, Wagner 
 */
class TrabalhoComInterfaces implements IAluno  {
    private $Aluno;
    private $Curso;
    private $Formacao;
    
    
    //construct
    public function __construct($Aluno, $Curso) {
        $this->Aluno = $Aluno;
        $this->Curso = $Curso;
        $this->Formcao = array();
    }
    
    //metodos
    
    public function Matricular($Curso) {
        $this->setCurso($Curso);
        echo "{$this->getAluno()} foi matriculado no curso de {$this->getCurso()} <hr>";
    }
    
    public function Formar() {
        $this->setFormacao[] = $this->getCurso() ;
   
        echo "{$this->getAluno()} se formou em {$this->getCurso()} ";
    }

    
    // seters
    public function setAluno($Aluno) {
        $this->Aluno = $Aluno;
    }

    public function setCurso($Curso) {
        $this->Curso = $Curso;
    }

    public function setFormacao($Formacao) {
        $this->Formacao = $Formacao;
    }

        
    // geters
    public function getAluno() {
        return $this->Aluno;
    }

    public function getCurso() {
        return $this->Curso;
    }

    public function getFormacao() {
        return $this->Formacao;
    }

    

}
