<?php

require_once "../../classes/Estilo.php"; 
$id = $_GET['id'];
$estilo = new Estilo($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sistema de Gerenciamento de Bandas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px;
            background-color: #24b1f7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #1a8bcd;
        }
    
    </style>

</head>
<body>
    <div>
        <div>
            <h1>Edição de Estilos</h1>
        </div>
        <div>
            <form action="estilos-editar-gravar.php" method="post" >
                <input type="hidden" name="id" value="<?= $estilo->id ?>">
                <div>
                    <label for="nomeEstilo">Estilo:</label>
                    <input type="text" name="nomeEstilo" value="<?= $estilo->nomeEstilo ?>">
                </div>
                
                <div>
                    <br><br>
                    <input type="submit" value="Gravar">
                </div>

            </form>
        </div>
    </div>
    
</body>
</html>