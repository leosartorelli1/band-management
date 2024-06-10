<?php
    require "../usuarios/usuario-verifica.php";
   
    require_once "../../classes/Integrante.php";

   
    $integrante = new Integrante();


    $lista = $integrante->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: white;
        }
        img {
            width: 80px; 
            height: 80px; 
            object-fit: cover; 
            border-radius: 50%;
        }
        a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: #333;
            color: white;
        }
        .btn-new {
            background-color: #24b1f7;
            color: white;
            border: 1px solid #24b1f7;
        }
        .btn-new:hover {
            background-color: #1a8bcd;
            border-color: #1a8bcd;
        }
        .btn-back {
            background-color: #eaeaea;
            color: #333;
        }
        .btn-back:hover {
            background-color: #ccc;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Band Management</title>
</head>
<body>
    <h1>Band Management</h1>
    <table border="1">
        <tr>
            <th>Foto</th>
            <th>Nome</th>
            <th>Função</th>
            <th>Banda</th>
            <th>Ações</th>
        </tr>
        <?php foreach($lista as $linha):?>
        <tr>
            <td><img src="../../img/<?= $linha['foto']?>" alt="foto" height="80"></td>
            <td><?= $linha['nome']?></td>
            <td><?= $linha['funcao']?></td>
            <td><?= $linha['descBanda']?></td>
            <td>
                <a href="integrantes-editar.php?id=<?= $linha['id'] ?>">Atualizar</a>
                |
                <a href="integrantes-excluir.php?id=<?= $linha['id'] ?>">Excluir</a>
            </td>
        </tr>

        <?php endforeach?>
    </table>
    <br><br>    
    <a class="btn-new"  href="integrantes-inserir.php">NOVO INTEGRANTE</a><br><br>
    <a class="btn-back" href="../../index2.php">VOLTAR</a>


</body>
</html>