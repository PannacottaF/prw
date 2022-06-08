<?php 
    include ('conexao.php');

    if($tipo=='entrada') {
        $sql="select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    }
    else if($tipo=='saida') {
        $sql="select sum(valor) valor from fluxo_caixa where tipo = 'saida'";
    }
    else if($tipo=='saldo') {
        $sql="select sum(case when tipo = 'entrada' then valor else 0 end) -
                    sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";
    }

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados inseridos com sucesso!";
    } else {
        echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
    }
?>
<a href='../index.php'> Voltar...</a>

