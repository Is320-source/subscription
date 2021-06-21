<?php

class Curso{

    private $curso;

    public function setCurso($curso){
        $this->curso = $curso;
        return $this;
    }

    public function getCurso(){
        return $this->curso;
    }

    private $carga_horaria;

    public function setCarga_horaria($carga_horaria){
        $this->carga_horaria = $carga_horaria;
        return $this;
    }

    public function getCarga_horaria(){
        return $this->carga_horaria;
    }

    private $periodo;

    public function setPeriodo($periodo){
        $this->periodo = $periodo;
        return $this;
    }

    public function getPeriodo(){
        return $this->periodo;
    }

    private $dias_semana;

    public function setDias_semana($dias_semana){
        $this->dias_semana = $dias_semana;
        return $this;
    }

    public function getDias_semana(){
        return $this->dias_semana;
    }

    private $mensalidade;

    public function setMensalidade($mensalidade){
        $this->mensalidade = $mensalidade;
        return $this;
    }

    public function getMensalidade(){
        return $this->mensalidade;
    }

    private $valor_pago;

    public function setValor_pago($valor_pago){
        $this->valor_pago = $valor_pago;
        return $this;
    }

    public function getValor_pago(){
        return $this->valor_pago;
    }

    private $pessoa;

    public function setPessoa($pessoa){
        $this->pessoa = $pessoa;
        return $this;
    }

    public function getPessoa(){
        return $this->pessoa;
    }

    private $SQLINSERT = "INSERT INTO `curso`(`curso`, `carga_horaria`, `periodo`, `dias_semana`, `mensalidade`, `valor_pago`, `pessoa`) VALUES (?,?,?,?,?,?,?)";

    public function inserir_curso(PDO $connection){
        $Curso = $connection->prepare($this->SQLINSERT);
        $Curso->execute(array(
            $this->getCurso(),
            $this->getCarga_horaria(),
            $this->getPeriodo(),
            $this->getDias_semana(),
            $this->getMensalidade(),
            $this->getValor_pago(),
            $this->getPessoa()
        ));
        return $connection->lastInsertId();
    }
}