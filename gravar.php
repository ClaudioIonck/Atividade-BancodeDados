<?php
    // fazendo a conexão com a base de dados
    include('conecta.php');
    //vamos pegar o nome e peso:
    $n = $_POST["nome"];
    $p = $_POST["peso"];
    $a = $_POST["altura"];

    // aula 28/10
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $cep = $_POST["cep"];

    $result = $pdo->prepare("INSERT INTO alunos(nome,peso,altura,endereco,numero,bairro,cidade,cep) values(:nome,:peso,:altura,:endereco,:numero,:bairro,:cidade,:cep)");

    $result->bindValue(":nome", $n);
    $result->bindValue(":peso", $p);
    $result->bindValue(":altura", $a);
    $result->bindValue(":endereco", $endereco);
    $result->bindValue(":numero", $numero);
    $result->bindValue(":bairro", $bairro);
    $result->bindValue(":cidade", $cidade);
    $result->bindValue(":cep", $cep);
    $result->execute();
    $novo_codigo = $pdo->lastInsertId();



?>

<script>
    alert("novo aluno inserido com o codigo: <?php echo ($novo_codigo); ?>");
    window.open("contatos.php","_self");
</script>