<?php
    require_once "../../classes/Banda.php";
    $banda = new Banda();
    $lista = $banda->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Integrantes</title>
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
        input[type="text"],
        input[type="file"],
        select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-image: linear-gradient(to bottom, #ffffff 0%, #e5e5e5 100%);
            cursor: pointer;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-repeat: no-repeat;
            background-position: right 8px center;
            background-size: 20px;
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
    <div class="container">
        <h1>Cadastro de Integrantes</h1>
        <div>
            <form enctype="multipart/form-data" action="integrantes-gravar.php" method="post">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <div>
                    <label for="foto">Foto:</label>
                    <input type="file" name="foto" id="foto" required>
                </div>

                <div>
                    <label for="funcao">Função:</label>
                    <input type="text" name="funcao" id="funcao" required>
                </div>

                <div>
                    <label for="banda_id">Banda:</label>
                    <select name="banda_id" id="banda_id" required>
                        <option value="">Selecione a Banda</option>
                        <?php
                            foreach($lista as $linha):
                                echo "<option value='{$linha['id']}'>
                                            {$linha['descBanda']}
                                      </option>";
                            endforeach
                        ?>
                    </select>
                </div>
                <div>
                    <input type="submit" value="Gravar">
                </div>

            </form>
        </div>
    </div>
</body>
</html>
