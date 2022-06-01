<?php 
    include ('conexao.php');

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = date("Y-m-d"); //O meu MySQL não aceitou outro modelo de data :(

    echo "Nome: $nome
    <br>Apelido: $apelido
    <br>Endereco: $endereco
    <br>Bairro: $bairro
    <br>Cidade: $cidade
    <br>Estado: $estado
    <br>Telefone: $telefone
    <br>Celular: $celular
    <br>Email: $email
    <br>Data de cadastro: $dt_cadastro";

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
        VALUES ('$nome', '$apelido', '$endereco', '$bairro', '$cidade', '$estado', '$telefone', '$celular', '$email', '$dt_cadastro')";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "<br><br>Dados inseridos com sucesso!";
    } else {
        echo "<br><br>Erro ao inserir a banco de dados: ".mysqli_error($con);
    }
?>
<a href='../index.php'> Voltar...</a>