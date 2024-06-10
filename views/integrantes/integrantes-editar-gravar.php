<?php

require_once "../../classes/Integrante.php";

$id = $_POST['id'];
$integrante = new Integrante($id);

$integrante->nome = $_POST['txtnome'];
$integrante->banda_id = $_POST['selbanda'];
$integrante->funcao = $_POST['txtfuncao'];
$integrante->foto = $_FILES['foto'];

$integrante->atualizar();

header('Location: integrantes-listar.php');
?>