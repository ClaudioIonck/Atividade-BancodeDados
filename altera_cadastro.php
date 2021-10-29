<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de alunos</title>
</head>
<body>
<form action="alterar.php" method="post">
    <div>
        CODIGO:
        <select id="codigo" name="codigo">
            <option> selecione um codigo </option>

            <?php 
                include("conecta.php");    // fazendo a conexão
                $comando = $pdo->prepare("SELECT cod FROM alunos");
                $resultado = $comando->execute();
                $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
                foreach($resultado as $coluna)
                {
                    $codigo = $coluna['cod'];
                    echo("<option>$codigo</option>");
                }
            ?>

        </select>
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

        <input type="submit" value="ALTERAR" onmousemove="Trocar();" >
    </div>
</form>

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