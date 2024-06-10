<?php
// Inclui o arquivo que contém a definição da classe Turma
require_once "../../classes/Banda.php";/*******MUNDANÇA DE CAMINHO*****/

// Cria um novo objeto Turma utilizando o id do objeto como referência
$id = $_POST['id'];
$banda = new Banda($id);

// Define as propriedades descTurma e ano do objeto Turma
$banda->descBanda= $_POST['descBanda'];
$banda->estilo_id = $_POST['estilo_id'];

// Chama o método atualizar() no objeto Turma
$banda->atualizar();

// Redireciona a página para a listagem de turmas
header('Location: bandas-listar.php');
?>