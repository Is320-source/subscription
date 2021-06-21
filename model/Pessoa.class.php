<?php

class Pessoa{

    private $nome;

    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }

    private $genero;

    public function setGenero($genero){
        $this->genero = $genero;
        return $this;
    }

    public function getGenero(){
        return $this->genero;
    }

    private $data_nasc;

    public function setData_nasc($data_nasc){
        $this->data_nasc = $data_nasc;
        return $this;
    }

    public function getData_nasc(){
        return $this->data_nasc;
    }

    private $bi;

    public function setBi($bi){
        $this->bi = $bi;
        return $this;
    }

    public function getBi(){
        return $this->bi;
    }

    private $passaport;

    public function setPassaport($passaport){
        $this->passaport = $passaport;
        return $this;
    }

    public function getPassaport(){
        return $this->passaport;
    }

    private $nacionalidade;

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
        return $this;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    private $habilitacao;

    public function setHabilitacao($habilitacao){
        $this->habilitacao = $habilitacao;
        return $this;
    }

    public function getHabilitacao(){
        return $this->habilitacao;
    }

    private $profissao;

    public function setProfissao($profissao){
        $this->profissao = $profissao;
        return $this;
    }

    public function getProfissao(){
        return $this->profissao;
    }

    private $SQLINSERT = "INSERT INTO `pessoas`(`nome`, `genero`, `data_nasc`, `bi`, `passaport`, `nacionalidade`, `habilitacao`, `profissao`) VALUES (?,?,?,?,?,?,?,?)";

    public function inserir_pessoa(PDO $connection){
        $Pessoa = $connection->prepare($this->SQLINSERT);
        $Pessoa->execute(array(
            $this->getNome(),
            $this->getGenero(),
            $this->getData_nasc(),
            $this->getBi(),
            $this->getPassaport(),
            $this->getNacionalidade(),
            $this->getHabilitacao(),
            $this->getProfissao()
        ));
        return $connection->lastInsertId();
    }

}
