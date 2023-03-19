<?php
session_start();
if((!isset($_SESSION['email']) == true ) and (!isset($_SESSION['password']) == true )){

    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location : login.php');

}

    $logado = $_SESSION['username'] ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema : </title>
</head>
<body>
    <style>

        #h1{
            color: green;
        }

    </style>
    <h1 id="h1" > Bem Vindo! <?php echo $logado ; ?> </h1>
    
</body>
</html>




<?php


?>