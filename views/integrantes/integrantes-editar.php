<?php

require_once "../../classes/Banda.php";
$banda = new Banda;
$lista = $banda->listar();

require_once "../../classes/Integrante.php";
$id = $_GET['id'];

$integrante = new Integrante($id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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
    <div>
        <h3>Editar integrante</h3>
    </div>
    <div>
        <form enctype="multipart/form-data" action="alunos-editar-gravar.php" method="POST">
            <div>

            </div>
            <input type="hidden" name="id" value="<?= $integrante->id ?>">
            <div>
                <label for="txtnome">Nome:</label>
                <input  type="text" name="txtnome" value="<?= $integrante->nome ?>">
            </div>
            <div>
                <label for="txtfuncao">Função:</label>
                <input  type="text" name="txtfuncao" value="<?= $integrante->funcao ?>">
            </div>
            <div>
                <label for="selbanda">Banda:</label>
                <select  name="selbanda">
                    <option value=''>Selecione...</option>
                    <?php
                    foreach ($lista as $linha) :
                        if ($linha['id'] == $integrante->banda_id) {
                            echo "<option value='{$linha['id']}' selected> 
                                         {$linha['descBanda']}
                                    </option>";
                        } else {
                            echo "<option value='{$linha['id']}'> 
                                         {$linha['descBanda']}
                                    </option>";
                        }
                    endforeach
                    ?>
                </select>
            </div>

            <img class="img-thumbnail my-3" id="preview" src="../../img/<?= $integrante->foto ?>" height="150"><br>
            <input type="file" id="inputFile" name="foto" onchange="previewImage(this)">
            <br><br>
            <input class="form-control btn btn-success" type="submit" value="Gravar">
        </form>
    </div>

    </div>

    <script>
       
        function previewImage(input) {
            var preview = document.getElementById('preview');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>


</body>

</html>