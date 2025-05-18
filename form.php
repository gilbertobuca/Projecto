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

        unset( $_SESSION['email']);
        unset( $_SESSION['senha']);

        echo '
            <div class="caixa-alerta">
            <br>
            <p>Credenciais não encontradas em nossa base de dados. Por favor, insira dados válidos</p>
            <br>
            <br>
            <span class="fechar" onclick="this.parentElement.style.display=\'none\';">&times;</span>
            </div>
        ';

    }else{

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: Principal.php');


    }
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
</head>
<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, #06486ed3, #092836);

}

div{
    background-color:rgba( 0, 0, 0, 0.6);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 80px;
    text-align: center;
    border-radius: 15px;
    color: white;

}

input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
    border-radius: 10px;

}

input#button{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 100%;
    font-family: monospace;
    font-weight: bolder;
    border-radius: 15px;
    color: white;
    font-size: 20px;
    
}

input#button:hover{
    background-color: #60afff;
    cursor: pointer;
    transition: all 0.6s;
}

.caixa-alerta {
    position: fixed;
    top: 60px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #1f21a3;
    border-left: 6px solid #33b1b6;
    border-right: 6px solid #33b1b6;
    color: #f05461;
    padding: 80px;
    margin: 20px auto;
    width: auto;
    z-index: 9999;
    max-width: 400px;
    height: 150px;
    border-radius: 8px;
    font-family: Arial, sans-serif;
    font-size: 25px;
    font-weight: bold;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.87);
}

.fechar {
    position: absolute;
    top: 10px;
    right: 20px;
    color: #f44336;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
}

.fechar:hover {
    color: #d10000;
    transition: 0.3s;
    transform: scale(1.2);
}

</style>
<body>
    <div>
        <h1>Login</h1>
        <form action="form.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="submit" id="button" value="Enviar">
        
        </form>
    </div>
    
</body>
</html>