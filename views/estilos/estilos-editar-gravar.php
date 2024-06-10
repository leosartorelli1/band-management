<?php

require_once "../../classes/Estilo.php";


$id = $_POST['id'];
$estilo = new Estilo($id);

$estilo->nomeEstilo = $_POST['nomeEstilo'];


$estilo->atualizar();


header('Location: estilos-listar.php');
?>