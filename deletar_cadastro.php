<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de alunos</title>
</head>
<body>
<form action="deletar.php" method="post">
    <div>
        CODIGO:
        <select id="codigo" name="codigo">
            <option> selecione um codigo </option>

            <?php 
                include("conecta.php");    // fazendo a conexão
                $comando = $pdo->prepare("SELECT cod,nome FROM alunos");
                $resultado = $comando->execute();
                $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
                foreach($resultado as $coluna)
                {
                    $codigo = $coluna["cod"];
                    $nome = $coluna["nome"];
                    echo("<option value='$codigo'>$codigo -> $nome</option>");
                }
            ?>
        

        <input type="submit" value="DELETAR" onmousemove="Validar();" >
    </div>
</form>

<br><br>

<?php
    include("tabela.php");
?>

<script>
    function Validar() {

        if(codigo.value=="") {
            alert("Preencha o CODIGO a ser DELETADO!")
        }
        
    }
</script>

</body>
</html>