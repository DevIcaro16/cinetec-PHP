<?php
  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
        #cabecalho{
            color: blue
        }
    </style>
    <div id="cabecalho">
    <h1  >LOGIN CINETEC: </h1>
    </div>
   
<body>
    <form action="testeLogin.php" method="POST" >

    <label for="">Informe o seu login :  </label>
    <input type="text" required name="email" placeholder="login..." > <br>
    <label for="">Informe a sua senha :  </label>
    <input type="password" required name="password" placeholder="senha..." > <br>
    <input type="submit" name="submit" value="enviar">

    <input type="text" name="" placeholder >



    </form>
</body>
</html>




