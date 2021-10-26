<?php
    // fazendo a conexão com a base de dados
    include('conecta.php');
    //vamos pegar o nome e peso:
    $c = $_POST["codigo"];
    $n = $_POST["nome"];
    $p = $_POST["peso"];
    $a = $_POST["altura"];

    $result = $pdo->prepare("UPDATE alunos SET nome=:nome, peso=:peso, altura=:altura WHERE cod=:codigo");

    $result->bindValue(":nome", $n);
    $result->bindValue(":peso", $p);
    $result->bindValue(":altura", $a);
    $result->bindValue(":codigo", $c);
    $result->execute();
    



?>

<script>
    alert("ALUNO ALTERADO. ");
    window.open("altera_cadastro.php","_self");
</script>