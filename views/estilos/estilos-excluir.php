<?php

require_once "../../classes/Estilo.php";


$id = $_GET['id'];


$estilo = new Estilo($id);


$estilo->excluir();


header('Location: estilos-listar.php');

?>