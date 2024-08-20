<?php
include('conecta.php'); // Inclui o arquivo de conexão com o banco de dados

        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        // Prepara uma consulta SQL para inserir os dados na tabela "usuario"
        $sql = "INSERT INTO usuario (nm_usuario, ds_login, ds_senha) VALUES ('$nome', '$login', '$senha')";


        // Executa a consulta SQL
        if ($PDO->query($sql) == TRUE) {
            echo "Novo registro criado com sucesso"; // Exibe uma mensagem de sucesso se a inserção for bem-sucedida
        } else {
            echo "Erro ao criar novo registro: ";  // Exibe uma mensagem de erro se a inserção falhar
        }
?>
