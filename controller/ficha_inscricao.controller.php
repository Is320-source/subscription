<?php
include_once "../model/Connector.class.php";
include_once "../model/Pessoa.class.php";
include_once "../model/Curso.class.php";

Connector::ReturnConnection();


//dados do curso


$Pessoa = new Pessoa();
$Pessoa->setNome(filter_input(INPUT_POST, "nome"));
$Pessoa->setGenero(filter_input(INPUT_POST, "genero"));
$Pessoa->setData_nasc(filter_input(INPUT_POST, "data"));
$Pessoa->setBi(filter_input(INPUT_POST, "bi"));
$Pessoa->setPassaport(filter_input(INPUT_POST, "passaport"));
$Pessoa->setNacionalidade(filter_input(INPUT_POST, "nacionalidade"));
$Pessoa->setHabilitacao(filter_input(INPUT_POST, "habilitacao"));
$Pessoa->setProfissao(filter_input(INPUT_POST, "profissao"));
$Id_Pessoa = $Pessoa->inserir_pessoa(Connector::ReturnConnection());

$Curso = new Curso();
$Curso->setCurso(filter_input(INPUT_POST, "curso"));
$Curso->setCarga_horaria(filter_input(INPUT_POST, "carga_horaria"));
$Curso->setPeriodo(filter_input(INPUT_POST, "periodo"));
$Curso->setDias_semana(filter_input(INPUT_POST, "dias_semana"));
$Curso->setMensalidade(filter_input(INPUT_POST, "mensalidade"));
$Curso->setValor_pago(filter_input(INPUT_POST, "valor"));
$Curso->setPessoa($Id_Pessoa);
$id_Curso = $Curso->inserir_curso(Connector::ReturnConnection());

if($Id_Pessoa > 0 && $id_Curso > 0){
    echo "success";
}else{
    echo "error";
}