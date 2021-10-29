<?php
    // fazendo a conexão com a base de dados
    include('conecta.php');
    //vamos pegar o nome e peso:
    $c = $_POST["codigo"];
    $n = $_POST["nome"];
    $p = $_POST["peso"];
    $a = $_POST["altura"];

    // aula 28/10
    $b = $_POST["endereco"];
    $d = $_POST["numero"];
    $m = $_POST["bairro"];
    $l = $_POST["cidade"];
    $o = $_POST["cep"];

    $result = $pdo->prepare("UPDATE alunos SET nome=:nome, peso=:peso, altura=:altura, endereco=:endereco, numero=:numero, bairro=:bairro, cidade=:cidade, cep=:cep WHERE cod=:codigo");

    $result->bindValue(":nome", $n);
    $result->bindValue(":peso", $p);
    $result->bindValue(":altura", $a);
    $result->bindValue(":codigo", $c);

    // aula 28/10
    $result->bindValue(":endereco", $b);
    $result->bindValue(":numero", $d);
    $result->bindValue(":bairro", $m);
    $result->bindValue(":cidade", $l);
    $result->bindValue(":cep", $o);
    $result->execute();
    



?>

<script>
    alert("ALUNO ALTERADO. ");
    window.open("altera_cadastro.php","_self");
</script>