<?php
    
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
      //acessa
      include_once('config.php'); // CONEXÃO COM O BANCO DE DADOS
      $email = $_POST['email'];
      $senha = $_POST['senha'];

       //print_r('Email: ' . $email);
       //print_r('<br>');
       //print_r('Senha: ' . $senha);

       $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

       $result = $conexao->query($sql);
      
       //print_r($sql);
       //print_r($result);

       if(mysqli_num_rows($result) < 1)
       {
          print_r('Acesso negado');
       }
       else
       {
          print_r('Acesso autorizado!');
       }
    }