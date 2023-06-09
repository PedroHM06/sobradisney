<?php
session_start();
$nome_servidor = "db4free.net";
$nome_usuario = "sobradisneyadmin"      ;
$senha_banco = "1cda3679";
$nome_banco = "sobradisneydb";



//Criando conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha_banco, $nome_banco);
//Verificar conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

//RECEBER HOSPEDES

$name = $_POST['usuario'];
$email = $_POST['email'];
$senhaLogin = $_POST['senha'];


$sql = "INSERT INTO hospedes (nome,email,senha) values ('$name','$email','$senhaLogin')";
if ($conecta->query($sql) === true) {
    header("Location:Login.html");
    exit(); 
} else {
    echo "Erro ao criar hospede" . $conecta->error;
}
