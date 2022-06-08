<?php 
    include ('conexao.php');
    $id_fluxo_caixa = $_GET['id_fluxo_caixa'];
    $sql = 'SELECT * FROM fluxo_caixa where id_fluxo_caixa ='. $id_fluxo_caixa;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Formulário de alteracao</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../CSS/style.css">
    </head>

    <body>

        <header class="center">
            <h1>Alteração de fluxo de caixa - IFSP</h1>
        </header>

        <form method="post" action="altera_fluxo_caixa_exe.php">

            <div class="container">
                <table class="position" align="center">
                    <tr>
                        <td><p>Data:</p> <input type="text" name="data" value="<?php echo $row['data']?>" size="50"><br></td>
                    </tr>
                    <tr>
                        <td><p>Tipo:</p> 
                            <select name="tipo">
                                <option <?php if($row['tipo'] == "AC")  echo "selected";?> >entrada</option>
                                <option <?php if($row['tipo'] == "AL")  echo "selected";?>>saida</option>
                            </select><br></td>
                    </tr>


                    <tr>
                        <td><p>Valor:</p> <input type="text" value="<?php echo $row['valor']?>" name="valor" size="50"><br></td>
                    </tr>
                    <tr>
                        <td><p>Historico:</p> <input type="text" value="<?php echo $row['historico']?>" name="historico" size="50"><br></td>
                    </tr>
                    
                    <tr>
                        <td><p>Cheque:</p> 
                            <select name="cheque">
                                <option <?php if($row['cheque'] == "AC")  echo "selected";?> >sim</option>
                                <option <?php if($row['cheque'] == "AL")  echo "selected";?>>nao</option>
                            </select><br></td>
                    </tr>
                    <tr>
                        <td><input id="botao" type="submit" value="Enviar"></td>
                    </tr>
                    <tr>
                        <input name="id_fluxo_caixa" type="hidden" value="<?php echo $row['id_fluxo_caixa']?>">
                    </tr>
                </table>
            </div>
        </form>
        <div align="center">
            <a href='listar_fluxo_caixa.php'> voltar para a página anterior</a>
        </div>
    </body>

</html>