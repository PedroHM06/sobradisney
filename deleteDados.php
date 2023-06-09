<?php
session_start();
$nome_servidor = "db4free.net";
$nome_usuario = "sobradisneyadmin";
$senha_banco = "1cda3679";
$nome_banco = "sobradisneydb";

// Criando conexão
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha_banco, $nome_banco);
// Verificar conexão
if ($conecta->connect_error) {
    die("Conexão falhou: " . $conecta->connect_error . "<br>");
}

// Verificar se o ID foi recebido
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Apagar registro
    $sql = "DELETE FROM hospedes WHERE id = $id";
    if ($conecta->query($sql) === TRUE) {
        echo "Registro apagado com sucesso<br>";
    } else {
        echo "Erro ao apagar o registro: " . $conecta->error . "<br>";
    }
} else {
    echo "ID não recebido";
}
