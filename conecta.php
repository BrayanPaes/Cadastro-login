<?php
$username = "root"; // Nome de usuário do banco de dados
$password = "usbw"; // Senha do banco de dados
try {
    // Tenta estabelecer uma conexão com o banco de dados usando PDO
    $PDO = new PDO('mysql:host=localhost;port=3307;dbname=banco500', $username, $password); 
   // Exibe uma mensagem de sucesso se a conexão for bem-sucedida
} catch(PDOException $e) {
    // Captura qualquer exceção PDO que ocorra, como erros de conexão, e exibe uma mensagem de erro
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
?>
