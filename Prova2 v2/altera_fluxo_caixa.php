<?php 
    include ('conexao.php');
    $id = $_GET['id'];
    $sql = 'SELECT * FROM fluxo_caixa where id ='. $id;
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Fromulário de alteracao</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../CSS/style.css">
    </head>

    <body>

        <header class="center">
            <h1>Alteração de fluxos</h1>
        <hr>
        <div align="center" class="pand">
            <a href='listar_fluxo_caixa.php'> voltar para a página anterior</a>
        </div>
        </header>
        
        <form method="post" action="altera_fluxo_caixa_exe.php">

            <div class="container">
                <div class="container1-1">
                    <p>Alteração de fluxos</p>
                </div>
                <table class="position" align="center">
                    <tr>
                        <td><p>Data:</p> <input type="date" name="data" value="<?php echo $row['data']?>" size="50"><br></td>
                    </tr>
                    <tr>
                        <td><p>Tipo:</p>  <input type="radio" name="opt" value="Entrada" <?php if($row['tipo'] == "Entrada")  echo "checked";?> id="bopt"> Entrada
                                            <input type="radio" name="opt" value="Saida" <?php if($row['tipo'] == "Saida")  echo "checked";?> id="bopt"> Saida<br></td>
                    </tr>
                    <tr>
                        <td><p>Valor:</p> <input type="number" name="valor" value="<?php echo $row['valor']?>" size="40"><br></td>
                    </tr>
                    <tr>
                        <td><p>Histórico:</p> <input type="text" name="historico" value="<?php echo $row['historico']?>" size="150"><br></td>
                    </tr>
                    <tr>
                        <td><p>Cheque:</p> 
                            <select name="cheque">
                                <option <?php if($row['cheque'] == "Sim")  echo "selected";?> >Sim</option>
                                <option <?php if($row['cheque'] == "Não")  echo "selected";?>>Não</option>
                            </select><br></td>
                    </tr>
                    <tr>
                        <td><input id="botao" type="submit" value="Enviar"></td>
                    </tr>
                    <tr>
                        <input name="id" type="hidden" value="<?php echo $row['id']?>">
                    </tr>
                </table>
            </div>
        </form>
    </body>

</html>