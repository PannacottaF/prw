<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>listagem de fluxos</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class="center">

    <h1>Listagem de fluxos!</h1><br>
    <hr>
    <table align="center" border="1" width="900">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                $dt = explode("-",$row['data']);
                echo "<td>" .$row['id']. "</td>";
                echo "<td>" .$dt[2]."/".$dt[1]."/".$dt[0]."</td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico']. "</a></td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'> Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
    <div align="center">
            <a href='../index.php'> voltar para a página anterior</a>
    </div>
</body>
</html>