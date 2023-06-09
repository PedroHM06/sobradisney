<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
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

    $sql = "SELECT id, nome, email FROM hospedes";
    $result = $conecta->query($sql);
    $qtd = $result->num_rows;

    if ($qtd > 0) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<td>Id</td>';
        echo '<td>Nome</td>';
        echo '<td>Email</td>';
        echo '<td>Ações</td>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($linha = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha["id"] . "</td>";
            echo "<td>" . $linha["nome"] . "</td>";
            echo "<td>" . $linha["email"] . "</td>";
            echo "<td>
                <button onclick=\"location.href='editaDados.html'\" class=\"btn btn-danger\">Editar</button>
                <button onclick=\"excluirDados()\" class=\"btn btn-danger\">Excluir</button>
                </td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    $conecta->close();
    ?>
    <script>
        function excluirDados() {
            var id = prompt('Insira o ID para poder excluir:'); // Solicita ao usuário que insira o ID
            if (id) {
                // Se o usuário inseriu um ID válido
                var url = 'deleteDados.php?id=' + encodeURIComponent(id); // Adiciona o ID como parâmetro na URL
                window.location.href = url; // Redireciona para o script PHP com o ID como parâmetro
            }
        }
    </script>
</body>

</html>