<?php
//incluir o arquivo que contem a classe Turma()
require_once "../../classes/Banda.php";

//Obtém o codigo ID enviado pelo método GET
$id = $_GET['id'];

//cria um novo novo objeto turma
$banda = new Banda($id);

//chama o métido(função) excluir do obejto turma
$banda->excluir();

//redireciona o usuario para a lista de turmas
header('Location: bandas-listar.php');

?>