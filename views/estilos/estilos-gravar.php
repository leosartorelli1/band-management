<?php

require_once "../../classes/Estilo.php";

$estilo = new Estilo();

$estilo->nomeEstilo = $_POST['nomeEstilo'];

$estilo->inserir();




?>
