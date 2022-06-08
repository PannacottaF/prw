<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM fluxo_caixa';

    
    $result = mysqli_query($con, $sql);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>listagem de fluxo de caixa</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class="center">

    <h1>Listagem de fluxo de caixa!</h1><br>
    <table align="center" border="1" width="900">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$row['id_fluxo_caixa']. "</td>";
                echo "<td>" .$row['data']. "</td>";
                echo "<td>" .$row['tipo']. "</td>";
                echo "<td>" .$row['valor']. "</td>";
                echo "<td>" .$row['historico']. "</td>";
                echo "<td>" .$row['cheque']. "</td>";
                echo "<td><a href='altera_fluxo_caixa.php?id_fluxo_caixa=".$row['id_fluxo_caixa']."'> Alterar</a></td>";
                echo "<td><a href='excluir_fluxo_caixa.php?id_fluxo_caixa=".$row['id_fluxo_caixa']."'> Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
    <div align="center">
            <a href='../index.php'> voltar para a página anterior</a>
    </div>
</body>
</html>