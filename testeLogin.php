<?php

session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password']) ){

    include_once('conexao.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND password = '$password' " ;

    $result = $connect->query($sql);

    $row = $result->fetch_assoc();
    
  
    if(mysqli_num_rows($result) < 1){

        echo"<h2 style='color: #f00;'>Erro: informações de Login não encontradas! Volte e tente novamente </h2>";

    }else{

        $_SESSION['username'] = $row["username"];
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: sistema.php');

    } 


}else{

    echo"<h2 style='color: #f00;'>Erro: informações de Login não encontradas! Volte e tente novamente </h2>";
    

   

  

} 


?>