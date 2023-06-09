<?php
session_start();
$nome_servidor = "db4free.net";
$nome_usuario = "sobradisneyadmin";
$senha_banco = "1cda3679";
$nome_banco = "sobradisneydb";

//Criando conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha_banco, $nome_banco);
//Verificar conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}
$nome = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$id = $_POST['id'];

$sql = "UPDATE hospedes SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
if ($conecta->query($sql) === TRUE) {
    
    header("Location:Login.html");
    exit();
} else {
    echo "Erro ao atualizar o registro: " . $conecta->error;
}
