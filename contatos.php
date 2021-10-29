<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de alunos</title>
</head>
<body>
<form action="gravar.php" method="post">
    <div>
        NOME:
        <input type="text" id="nome" name="nome">
        <br>
        <br>
        PESO:
        <input type="text" id="peso" name="peso">
        <br>
        <br>
        ALTURA:
        <input type="text" id="altura" name="altura">
        <br>
        <br>
        <!--aula 28/10-->
        ENDERECO:
        <input type="text" id="endereco" name="endereco">
        <br>
        <br>
        NUMERO:
        <input type="text" id="numero" name="numero">
        <br>
        <br>
        BAIRRO:
        <input type="text" id="bairro" name="bairro">
        <br>
        <br>
        CIDADE:
        <input type="text" id="cidade" name="cidade">
        <br>
        <br>
        CEP:
        <input type="text" id="cep" name="cep">
        <br>
        <br>
        <input type="submit" value="GRAVAR" onmousemove="Trocar();" >
    </div>
</form>
<br><br>

<!-- vamos inserir a tabela.php-->

<?php
    include("tabela.php");
?>

<script>
    function Trocar() {
        var texto = altura.value;
        altura.value = texto.replace(",", ".")

        if(nome.value=="") {
            alert("Preencha o nome!")
        }
        if (peso.value=="") {
            alert("Preencha o peso!")
        }
        if (altura.value=="") {
            alert("Preencha a altura!")
        }
    }
</script>

</body>
</html>