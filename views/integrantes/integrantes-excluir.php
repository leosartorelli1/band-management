<?php
//incluir o arquivo que contem a classe Turma()
require_once "../../classes/Integrante.php";

//Obtém o codigo ID enviado pelo método GET
$id = $_GET['id'];

//cria um novo novo objeto turma
$integrante = new Integrante($id);

//chama o métido(função) excluir do obejto turma
$integrante->excluir();

//redireciona o usuario para a lista de turmas
header('Location: integrantes-listar.php');

?>