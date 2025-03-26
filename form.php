<?php

include_once('config.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login</title>
    <link rel="stylesheet" href="form.css">
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

input#input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;

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

input#button :hover{
    background-color: #60afff;
    cursor: pointer;
    transition: all 0.6s;
}

</style>
<body>
    <div>
        <h1>Login</h1>
        <form action="testlogin.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" name="submit" id="button" value="Enviar">
        
        </form>
    </div>
    
</body>
</html>