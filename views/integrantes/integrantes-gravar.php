<?php

require_once "../../classes/Integrante.php";


$integrante = new Integrante();


$integrante->nome = $_POST['nome'];
$integrante->foto = $_FILES['foto'];
$integrante->funcao = $_POST['funcao'];
$integrante->banda_id = $_POST['banda_id'];

$integrante->inserir();




?>
