<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Band Management</title>
    <style>

        body {
            background-color : #F2F2F2;

            display: flex;
            justify-content: center;
            align-items: center; 
            height: 100vh; 
            margin: 0; 

            font-family: "Roboto", sans-serif;
        }
        
        .container {
             background-color: #FFFFFF;
            width: 300px;

            display: flex;
            flex-direction: column;
            justify-content: space-around;

            border-style: solid;
            border-color: gray;
            border-radius: 15px;
            border-width: 1.75px;

            box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
           
            padding: 10px ;
        }

        .container span {
            color: gray;
        }

        .login {
            display: flex;
            flex-direction: column;
            justify-content: center;

            margin: 10px;;

        }

        .fieldset input {
            font-family: "Roboto", sans-serif;

            border-radius: 15px;
            border-width: 1px;
            border: 1px solid #E6E6F0;

            width: 270px;
            height: 46px;
        
            font-size: 15px;

            padding: 5px;

        }

        .button {
            appearance: button;
            background-color: #000;
            background-image: none;
            border: 1px solid #000;
            border-radius: 4px;
            box-shadow: #fff 4px 4px 0 0,#000 4px 4px 0 1px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            margin: 0 5px 10px 0;
            overflow: visible;
            padding: 12px 40px;
            text-align: center;
            text-transform: none;
            touch-action: manipulation;
            user-select: none;
            -webkit-user-select: none;
            vertical-align: middle;
            white-space: nowrap;
        }

        .button:focus {
            text-decoration: none;
        }

        .button:hover {
            text-decoration: none;
        }

        .button:active {
            box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
            outline: 0;
        }

        .button:not([disabled]):active {
            box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
            transform: translate(2px, 2px);
        }

        @media (min-width: 768px) {
        .button {
            padding: 12px 50px;
        }
}
    
    </style>
</head>
<body>
    <div class="container">
    <form class="login" action="views/usuarios/usuario-login.php" method="post">
    <h1>Faça seu <span>login</span></h1>
    <h3>Bem-Vindo</h3>
        <div class="fieldset">
        <input type="text" name="usuario" placeholder="Digite seu usuario"><br><br>
        </div>

        <div class="fieldset">
        <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
        </div>

        <input class ="button" type="submit" value="Entrar">
    </form>
    </div>
</body>
</html>