<?php

session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['senha']))
{
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //print_r('<br>');
    //print_r('Email: ' . $email);
    //print_r('<br>');
    //print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM alunos WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    //print_r('<br>');
    //print_r($sql);
    //print_r($result);

    if(mysqli_num_rows($result) < 1){
        print_r('<br>');
        print_r('Credenciais não encontradas em nossa base de dados. Por favor, insira dados válidos');
        unset( $_SESSION['email']);
        unset( $_SESSION['senha']);
        header('Location: form.php');
        print_r('<br>');
        print_r('Credenciais não encontradas em nossa base de dados. Por favor, insira dados válidos');

    }
    else{
        //print_r('<br>');
        //print_r('Existe o aluno');
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: Principal.php');
        print_r('<br>');
        print_r('Bem vindo ' . $email);


    }
}
else{

    header('Location: form.php');
}



?>