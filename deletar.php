<?php
    // fazendo a conexão com a base de dados
    include('conecta.php');
    //vamos pegar o nome e peso:
    $c = $_POST["codigo"];

    $result = $pdo->prepare("DELETE FROM alunos WHERE cod=:codigo");

    $result->bindValue(":codigo", $c);
    $result->execute();
    



?>

<script>
    alert("ALUNO DELETADO. ");
    window.open("deletar_cadastro.php","_self");
</script>