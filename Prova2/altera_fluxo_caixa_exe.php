<?php 
    include ('conexao.php');
    $id_fluxo_caixa = $_POST['id_fluxo_caixa'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
    
    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Data: " . $data . "<p>";
    
    $sql = "UPDATE fluxo_caixa SET
            data='$data',
            tipo='$tipo',
            valor='$valor',
            historico='$historico',
            cheque='$cheque',
            WHERE id_fluxo_caixa=$id_fluxo_caixa";
	    
	$result = mysqli_query($con, $sql);
	if($result){
		echo "Dados alterados com sucesso <br>";
    }
	else{
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
    }
?>
<a href='listar_fluxo_caixa.php'> Voltar...</a>