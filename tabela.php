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
        $L++;
        if($L%2==0)  // Verificando se o resto da divisão por 2 é ZERO
        {
            echo("<tr class='linha_par'><td>$codigo</td><td>$nome</td><td>$peso</td><td>$altura</td></tr>");
        }else{
            echo("<tr class='linha_impar'><td>$codigo</td><td>$nome</td><td>$peso</td><td>$altura</td></tr>");
        }
    }
?>

</table>