<?php
    // arquivo para conexão
    
try {
    // variável para conexão:  MUDAR BASE DE DADOS
    $pdo = new Pdo("mysql:dbname=contatos;host=localhost","root","vertrigo");
}
catch (PDOException $error) {
    // mensagem de erro:
    echo "Error in connection: " . $error->getMessage();
}
    
?>