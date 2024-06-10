<?php
//Incluir o arquivo que contém as definições da classe Turma
require_once "../../classes/Banda.php";

//cria um novo objeto turma
$banda = new Banda();

//define as propriedades descTurma e Ano do objeto Turma
//Com os valores enviados pelo formulário  turmas - inserir.html
$banda->descBanda = $_POST['descBanda'];
$banda->estilo_id = $_POST['estilo'];

//chama o metodo inserir() do objeto Turma,
//inserir os dados no banco
$banda->inserir();




?>
