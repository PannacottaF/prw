<?php 

    include ('conexao.php');
    $sql = 'SELECT * FROM agenda';

    //retorna todos os dados da consulta
    $result = mysqli_query($con, $sql);

    //retorna a primeira linha
    //$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>listagem de agendas</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body class="center">

    <h1>Listagem de agendas!</h1><br>
    <table align="center" border="1" width="900">
        <!-- tr>th*4 -->
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Data de cadastro</th>
        </tr>

        <?php 
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                $data = explode("-",$row['dt_cadastro']);
                echo "<td>" .$row['id_agenda']. "</td>";
                echo "<td>" .$row['nome']. "</td>";
                echo "<td>" .$row['apelido']. "</td>";
                echo "<td>" .$row['endereco']. "</td>";
                echo "<td>" .$row['bairro']. "</td>";
                echo "<td>" .$row['cidade']. "</td>";
                echo "<td>" .$row['estado']. "</td>";
                echo "<td>" .$row['telefone']. "</td>";
                echo "<td>" .$row['celular']. "</td>";
                echo "<td>" .$row['email']. "</td>";
                echo "<td>" .$data[2]."/".$data[1]."/".$data[0]."</td>";
                echo "<td><a href='altera_agenda.php?id_agenda=".$row['id_agenda']."'> Alterar</a></td>";
                echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'> Excluir</a></td>";
                echo "</tr>";
            }
        ?>

    </table>
    <div align="center">
            <a href='../index.php'> voltar para a página anterior</a>
    </div>
</body>
</html>