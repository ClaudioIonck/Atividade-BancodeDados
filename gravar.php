<?php
    // fazendo a conexão com a base de dados
    include('conecta.php');
    //vamos pegar o nome e peso:
    $n = $_POST["nome"];
    $p = $_POST["peso"];
    $a = $_POST["altura"];

    $result = $pdo->prepare("INSERT INTO alunos(nome,peso,altura) values(:nome,:peso,:altura)");

    $result->bindValue(":nome", $n);
    $result->bindValue(":peso", $p);
    $result->bindValue(":altura", $a);
    $result->execute();
    $novo_codigo = $pdo->lastInsertId();



?>

<script>
    alert("novo aluno inserido com o codigo: <?php echo ($novo_codigo); ?>");
    window.open("contatos.php","_self");
</script>