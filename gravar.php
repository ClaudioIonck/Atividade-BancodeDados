<?php
    // fazendo a conexão com a base de dados
    include('conecta.php');
    //vamos pegar o nome e peso:
    $n = $_POST["nome"];
    $p = $_POST["peso"];
    $a = $_POST["altura"];

    // aula 28/10
    $b = $_POST["endereco"];
    $d = $_POST["numero"];
    $m = $_POST["bairro"];
    $l = $_POST["cidade"];
    $o = $_POST["cep"];

    $result = $pdo->prepare("INSERT INTO alunos(nome,peso,altura,endereco,numero,bairro,cidade,cep) values(:nome,:peso,:altura,:endereco,:numero,:bairro,:cidade,:cep)");

    $result->bindValue(":nome", $n);
    $result->bindValue(":peso", $p);
    $result->bindValue(":altura", $a);
    $result->bindValue(":endereco", $b);
    $result->bindValue(":numero", $d);
    $result->bindValue(":bairro", $m);
    $result->bindValue(":cidade", $l);
    $result->bindValue(":cep", $o);
    $result->execute();
    $novo_codigo = $pdo->lastInsertId();



?>

<script>
    alert("novo aluno inserido com o codigo: <?php echo ($novo_codigo); ?>");
    window.open("contatos.php","_self");
</script>