<?php 
    include ('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda ='. $id_agenda;
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
            <h1>Alteração de agendas - IFSP</h1>
        </header>

        <form method="post" action="altera_agenda_exe.php">

            <div class="container">
                <table class="position" align="center">
                    <tr>
                        <td><p>Nome:</p> <input type="text" name="nome" value="<?php echo $row['nome']?>" size="50"><br></td>
                    </tr>
                    <tr>
                        <td><p>Apelido:</p> <input type="text" name="apelido" value="<?php echo $row['apelido']?>" size="40"><br></td>
                    </tr>
                    <tr>
                        <td><p>Endereço:</p> <input type="text" value="<?php echo $row['endereco']?>" name="endereco" size="70"><br></td>
                    </tr>
                    <tr>
                        <td><p>Bairro:</p> <input type="text" value="<?php echo $row['bairro']?>" name="bairro" size="50"><br></td>
                    </tr>
                    <tr>
                        <td><p>Cidade:</p> <input type="text" value="<?php echo $row['cidade']?>" name="cidade" size="50"><br></td>
                    </tr>
                    <tr>
                        <td><p>Estado:</p> 
                            <select name="estado">
                                <option <?php if($row['estado'] == "AC")  echo "selected";?> >AC</option>
                                <option <?php if($row['estado'] == "AL")  echo "selected";?>>AL</option>
                                <option <?php if($row['estado'] == "AP")  echo "selected";?>>AP</option>
                                <option <?php if($row['estado'] == "AM")  echo "selected";?>>AM</option>
                                <option <?php if($row['estado'] == "BA")  echo "selected";?>>BA</option>
                                <option <?php if($row['estado'] == "CE")  echo "selected";?>>CE</option>
                                <option <?php if($row['estado'] == "DF")  echo "selected";?>>DF</option>
                                <option <?php if($row['estado'] == "ES")  echo "selected";?>>ES</option>
                                <option <?php if($row['estado'] == "GO")  echo "selected";?>>GO</option>
                                <option <?php if($row['estado'] == "MA")  echo "selected";?>>MA</option>
                                <option <?php if($row['estado'] == "MT")  echo "selected";?>>MT</option>
                                <option <?php if($row['estado'] == "MS")  echo "selected";?>>MS</option>
                                <option <?php if($row['estado'] == "MG")  echo "selected";?>>MG</option>
                                <option <?php if($row['estado'] == "PA")  echo "selected";?>>PA</option>
                                <option <?php if($row['estado'] == "PB")  echo "selected";?>>PB</option>
                                <option <?php if($row['estado'] == "PR")  echo "selected";?>>PR</option>
                                <option <?php if($row['estado'] == "PE")  echo "selected";?>>PE</option>
                                <option <?php if($row['estado'] == "PI")  echo "selected";?>>PI</option>
                                <option <?php if($row['estado'] == "RJ")  echo "selected";?>>RJ</option>
                                <option <?php if($row['estado'] == "RN")  echo "selected";?>>RN</option>
                                <option <?php if($row['estado'] == "RS")  echo "selected";?>>RS</option>
                                <option <?php if($row['estado'] == "RO")  echo "selected";?>>RO</option>
                                <option <?php if($row['estado'] == "RR")  echo "selected";?>>RR</option>
                                <option <?php if($row['estado'] == "SC")  echo "selected";?>>SC</option>
                                <option <?php if($row['estado'] == "SP")  echo "selected";?>>SP</option>
                                <option <?php if($row['estado'] == "SE")  echo "selected";?>>SE</option>
                                <option <?php if($row['estado'] == "TO")  echo "selected";?>>TO</option>
                            </select><br></td>
                    </tr>
                    <tr>
                        <td><p>Telefone:</p> <input type="text" value="<?php echo $row['telefone']?>" name="telefone" size="15"><br></td>
                    </tr>
                    <tr>
                        <td><p>Celular:</p> <input type="text" value="<?php echo $row['celular']?>" name="celular" size="15"><br></td>
                    </tr>
                    <tr>
                        <td><p>Email:</p> <input type="text" value="<?php echo $row['email']?>" name="email" size="70"><br></td>
                    </tr>
                    <tr>
                        <td><input id="botao" type="submit" value="Enviar"></td>
                    </tr>
                    <tr>
                        <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
                    </tr>
                </table>
            </div>
        </form>
        <div align="center">
            <a href='listar_agenda.php'> voltar para a página anterior</a>
        </div>
    </body>

</html>