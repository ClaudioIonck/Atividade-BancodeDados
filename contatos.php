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

        <img src="img/lupa.png" width="20px" onclick="Pesquisar();">

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

<!--Importando Script Jquery-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script>

    function Pesquisar() {
        //Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
			url: 'https://viacep.com.br/ws/' + cep.value + '/json/unicode/',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
			dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
			success: function(resposta){
                if(resposta.erro==true){
                    alert("ENDEREÇO NÂO ENCONTRADO");
                }
				//Agora basta definir os valores que você deseja preencher
				//automaticamente nos campos acima.
				$("#endereco").val(resposta.logradouro);
				$("#bairro").val(resposta.bairro);
				$("#cidade").val(resposta.localidade);
			}
		});
    }

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