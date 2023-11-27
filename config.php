<?php

$servername = "db";

$username = "php_docker"; 
   
$password = "password"; 

$dbname = "php_docker2"; 

$conn = new mysqli($servername, $username, $password, $dbname); //variável que está sendo utilizada para armazenar o objeto de conexão com o banco de dados

if ($conn->connect_error) { // connect_error é uma propriedade do mysqli, retorna "" se não tiver erros ou mensagem de texto se houver erros

    die("Connection failed: " . $conn->connect_error); //encerra imediatamente a execução do script e exibe uma mensagem

}

?> 