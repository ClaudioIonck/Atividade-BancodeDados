<style>

    .cabecalho{
        background-color:yellow;
        font-size:20px;
    }

    .linha_par{
        background-color:#F5DEB3;
    }

    .linha_impar{
        background-color:silver;
        color:blue;
    }

</style>


<table align="center" border="1" cellspacing="0" cellpadding="5">

    <tr class="cabecalho"> 

        <td> Código </td> 
        <td> Nome   </td> 
        <td> Peso   </td> 
        <td> Altura </td>
        <!--aula 28/10-->
        <td> Endereço </td> 
        <td> Numero   </td> 
        <td> Bairro   </td> 
        <td> Cidade   </td>
        <td> cep      </td>   

    </tr> 

<?php

    include("conecta.php");  //Fazendo a conexão
    $comando = $pdo->prepare("SELECT * FROM alunos ORDER BY nome");
    $resultado = $comando->execute();
    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    $L = 0;

    foreach($resultado as $coluna)

    {

        $codigo =   $coluna["cod"];
        $nome   =   $coluna["nome"];
        $peso   =   $coluna["peso"];
        $altura =   $coluna["altura"];
        // mudanças aula 28/10
        $endereco = $coluna["endereco"];
        $numero = $coluna["numero"];
        $bairro = $coluna["bairro"];
        $cidade = $coluna["cidade"];
        $cep = $coluna["cep"];
        $L++;
        if($L%2==0)  // Verificando se o resto da divisão por 2 é ZERO
        {
            echo("<tr class='linha_par'><td>$codigo</td><td>$nome</td><td>$peso</td><td>$altura</td><td>$endereco</td><td>$numero</td><td>$bairro</td><td>$cidade</td><td>$cep</td></tr>");
        }else{
            echo("<tr class='linha_impar'><td>$codigo</td><td>$nome</td><td>$peso</td><td>$altura</td><td>$endereco</td><td>$numero</td><td>$bairro</td><td>$cidade</td><td>$cep</td></tr>");
        }
    }
?>

</table>